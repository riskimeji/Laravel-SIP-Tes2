<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function index(Request $request){
        $query = $request->input('query');
        $books = Book::where('title', 'LIKE', "%$query%")
        ->orWhere('author', 'LIKE', "%$query%")
        ->latest()
        ->paginate(12);
        $count = Book::count();
        return view('petugas.book.book',[
            'counts' => $count,
            'books' => $books
        ]);
    }
    public function create(){
        $categories = ['Romance', 'Mystery', 'Sci-Fi', 'Fantasy', 'Horror'];

        return view('petugas.book.create',[
            'categories' => $categories
        ]);
    }

   public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'category' => 'required|string',
            'published' => 'required|date',
            'page' => 'required|integer',
            'stock' => 'required|integer',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $slug = Str::slug($request->title, '-');
        if($request->file('image')){
            $file= $request->file('image');
            $filename= $slug.$file->getClientOriginalName();
            $file-> move(public_path('public/image'), $filename);
        }
        Book::create([
            'title' => $request->title,
            'slug' => $slug,
            'author' => $request->author,
            'category' => $request->category,
            'published' => $request->published,
            'page' => $request->page,
            'stock' => $request->stock,
            'description' => $request->description,
            'image' => 'public/image/'.$filename,
        ]);
        return redirect()->route('staff.books.index')->with('success', 'Book has been added successfully.');
    }
  public function edit($slug){
    $book = Book::where('slug', $slug)->firstOrFail();
    $categories = ['Romance', 'Mystery', 'Sci-Fi', 'Fantasy', 'Horror'];

    return view('petugas.book.edit', [
        'book' => $book,
        'categories' => $categories,
    ]);
}

    public function update(Request $request, $slug){
    $request->validate([
        'title' => 'required|string',
        'author' => 'required|string',
        'category' => 'required|string',
        'published' => 'required|date',
        'page' => 'required|integer',
        'stock' => 'required|integer',
        'description' => 'required|string',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Temukan buku berdasarkan slug
    $book = Book::where('slug', $slug)->first();

// Periksa apakah title berubah
if ($request->title !== $book->title) {
    // Jika title berubah, update juga slug
    $newSlug = Str::slug($request->title, '-');
    $book->slug = $newSlug;
}

// Periksa apakah ada file gambar yang diunggah
if ($request->file('image')) {
    $file = $request->file('image');
    $filename = $book->slug . $file->getClientOriginalName();
    $file->move(public_path('public/image'), $filename);

    // Perbarui data buku termasuk gambar
    $book->update([
        'title' => $request->title,
        'slug'=> $book->slug,
        'author' => $request->author,
        'category' => $request->category,
        'published' => $request->published,
        'page' => $request->page,
        'stock' => $request->stock,
        'description' => $request->description,
        'image' => 'public/image/' . $filename,
    ]);
} else {
    // Perbarui data buku tanpa mengubah gambar
    $book->update([
        'title' => $request->title,
        'slug'=> $newSlug,
        'author' => $request->author,
        'category' => $request->category,
        'published' => $request->published,
        'page' => $request->page,
        'stock' => $request->stock,
        'description' => $request->description,
    ]);
}
    return redirect()->route('staff.books.index')->with('success', 'Book has been updated successfully.');
}
public function destroy($id) {
    $book = Book::find($id);

    if (!$book) {
        return redirect()->route('staff.books.index')
            ->with('error', 'Buku tidak ditemukan');
    }

    $book->delete();
    return redirect()->route('staff.books.index')
        ->with('success', 'Buku berhasil dihapus');
}


}
