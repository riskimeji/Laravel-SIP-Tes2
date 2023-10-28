<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Borrowed;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;


class UserController extends Controller
{
    public function dashboard()
    {
        if(Auth::check()){
            $books = Book::latest()->get();
            return view('user.index',[
                'books'=>$books
            ]);
        }

        return redirect()->route('login')
            ->withErrors([
            'email' => 'Please login to access the dashboard.',
        ])->onlyInput('email');
    }
  public function detail($slug){
    $book = Book::where('slug', $slug)->first();
    if (!$book) {
            return redirect('404');
    }
    $book_id = $book->id;
    $user_id = Auth::id();
    $cek = Borrowed::where('user_id', $user_id)->where('status','Dipinjam')->where('book_id', $book_id);
    $cek = $cek->count();

    return view('user.detail',[
        'cek' => $cek
    ],
    compact('book'));
    }


  public function borrow(Request $request, $id){
    $book = Book::find($id);
    if (!$book) {
        return redirect()->route('user.dashboard')->withErrors([
            'error' => 'Buku tidak ditemukan.',
        ]);
    }
    if ($book->stock < 1) {
        return redirect()->route('user.dashboard')->withErrors([
            'error' => 'Stok buku tidak tersedia.',
        ]);
    }

    $borrowed = new Borrowed();
    $uniqueCode = uniqid(Auth::user()->id . $book->id);
    while (Borrowed::where('borrow_code', $uniqueCode)->exists()) {
        $uniqueCode = uniqid(Auth::user()->id . $book->id);
    }
    $borrowed->borrow_code = $uniqueCode;

    $borrowed->book_id = $book->id;
    $borrowed->user_id = Auth::id();
    $borrowed->status = 'Dipinjam';
    $borrowed->save();

    $book->stock--;

    $book->save();

    return redirect()->route('user.history')->with('success', 'Buku berhasil dipinjam.');
}

public function return(Request $request, $id){
    $borrowed = Borrowed::find($id);

    if (!$borrowed) {
        return redirect()->route('user.dashboard')->withErrors([
            'error' => 'Data peminjaman tidak ditemukan.',
        ]);
    }

    $oldStatus = $borrowed->status;
    $book = $borrowed->book;

    $borrowed->status = $request->status;
    $borrowed->save();

    if ($oldStatus === 'Dipinjam' && $request->status === 'Dikembalikan') {
        $book->stock++;
        $book->save();
    } elseif ($oldStatus === 'Dipinjam' && $request->status === 'Terlambat') {

    } elseif ($oldStatus === 'Dipinjam' && $request->status === 'Hilang') {

    } elseif ($oldStatus === 'Dipinjam' && $request->status === 'Rusak') {

        $book->stock--;
        $book->save();
    }

    return redirect()->route('user.history')->with('success', 'Status buku berhasil diperbarui.');
}

    public function book(Request $request)
    {
        if(Auth::check()){
        $query = $request->input('query');
        $books = Book::where('title', 'LIKE', "%$query%")
        ->orWhere('author', 'LIKE', "%$query%")
        ->latest()
        ->paginate(12);
        return view('user.book',[
                'books'=>$books
            ]);
          }
        return redirect()->route('login')
            ->withErrors([
            'email' => 'Please login to access the dashboard.',
        ])->onlyInput('email');
    }

     public function settings(Request $request){
        $id = Auth::id();
        $user = User::where('id', $id)->first();
        return view('user.setting',[
            'user'=>$user
        ]);
    }
   public function updateProfile(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:250',
        ]);

        $user = Auth::user();
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('user.settings')->withSuccess('Profile updated successfully.');
    }

  public function updatePassword(Request $request){
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:8',
        'confirm_password' => 'required|same:new_password',
    ]);
    $user = Auth::user();
    if (Hash::check($request->input('current_password'), $user->password)) {
        if ($request->input('new_password') !== $request->input('confirm_password')) {
            return redirect()->route('user.settings')->withError('New password and confirm password must match.');
        }

        if ($request->input('new_password') === $request->input('current_password')) {
            return redirect()->route('user.settings')->withError('New password must be different from the current password.');
        }

        $user->password = Hash::make($request->input('new_password'));
        $user->save();
        return redirect()->route('user.settings')->withSuccess('Password updated successfully.');
    } else {
        return redirect()->route('user.settings')->withError('Current password is incorrect.');
    }
}


    public function history(Request $request){
        if(Auth::check()){
            $query = $request->input('query');
            $id_user = Auth::id();
            $borrow = Borrowed::where('borrow_code', 'LIKE', "%$query%")
            ->where('user_id', $id_user)
            ->latest()
            ->paginate(12);
            return view('user.history',[
                'datas' => $borrow
            ]);
        }
        return redirect()->route('login')
            ->withErrors([
            'email' => 'Please login to access the dashboard.',
        ])->onlyInput('email');
    }



}
