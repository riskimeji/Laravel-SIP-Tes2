<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Petugas\PetugasController;
use App\Http\Controllers\Petugas\BookController;
use App\Http\Controllers\Petugas\MemberController;
use App\Http\Controllers\Petugas\BorrowedController;
use App\Http\Controllers\Auth\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::controller(UserController::class)->middleware('auth')->group(function() {
    Route::get('/dashboard', 'dashboard')->name('user.dashboard');
    Route::get('/book/detail/{slug}', 'detail')->name('user.detail');
    Route::post('/book/detail/{id}', 'borrow')->name('user.borrow');
    Route::get('/books', 'book')->name('user.book');
    Route::get('/history', 'history')->name('user.history');
    Route::put('/history/{id}', 'return')->name('user.return');
    Route::get('/settings', 'settings')->name('user.settings');
    Route::put('/settings', 'updatePassword')->name('update-password');
    Route::put('/settings/profile', 'updateProfile')->name('user.updateProfile');

});

Route::prefix('staff')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', [PetugasController::class, 'dashboard'])->name('staff.dashboard');
    Route::get('/books', [BookController::class, 'index'])->name('staff.books.index');
    Route::get('/books/create', [BookController::class, 'create'])->name('staff.books.create');
    Route::post('/books/create', [BookController::class, 'store'])->name('staff.books.store');
    Route::get('/books/{slug}/edit', [BookController::class, 'edit'])->name('staff.books.edit');
    Route::put('/books/{slug}', [BookController::class, 'update'])->name('staff.books.update');
    Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('staff.books.destroy');

    Route::get('/member', [MemberController::class, 'index'])->name('staff.member.index');
    Route::get('/member/create', [MemberController::class, 'create'])->name('staff.member.create');
    Route::post('/member/create', [MemberController::class, 'store'])->name('staff.member.store');
    Route::get('/member/{id}/edit', [MemberController::class, 'edit'])->name('staff.member.edit');
    Route::put('/member/{id}', [MemberController::class, 'update'])->name('staff.member.update');
    Route::delete('/member/{id}', [MemberController::class, 'destroy'])->name('staff.member.destroy');

    Route::get('/borrowed', [BorrowedController::class, 'index'])->name('staff.borrowed.index');
    Route::get('/borrowed/{id}/edit', [BorrowedController::class, 'edit'])->name('staff.borrowed.edit');
    Route::put('/borrowed/{id}', [BorrowedController::class, 'update'])->name('staff.borrowed.update');
    Route::delete('/borrowed/{id}', [BorrowedController::class, 'destroy'])->name('staff.borrowed.destroy');
});


Route::controller(AuthController::class)->group(function() {
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
    Route::get('/register', 'register')->name('register')->middleware('guest');
    Route::post('/store', 'store')->name('store')->middleware('guest');
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
});



