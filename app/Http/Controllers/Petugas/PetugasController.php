<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\Borrowed;
class PetugasController extends Controller
{
    public function dashboard(){
        if(Auth::check())
        {
        $books = Book::latest()->take(6)->get();
        $borroweds = Borrowed::latest()->take(6)->get();
            return view('petugas.index',[
                'books'=>$books,
                'borroweds'=>$borroweds,
            ]);
        }

        return redirect()->route('login')
            ->withErrors([
            'email' => 'Please login to access the dashboard.',
        ])->onlyInput('email');
    }
}
