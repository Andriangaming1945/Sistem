<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\originalcontroller;
use App\Http\Controllers\postscontroller;
use App\Http\Controllers\petugascontroller;
use App\Http\Controllers\peminjamancontroller;
use App\Http\Controllers\bukucontroller;
use App\Http\Controllers\lokasicontroller;
use App\Http\Controllers\kategoricontroller;
use App\Http\Controllers\pengembaliancontroller;
use App\Http\Controllers\poscontroller;
use App\Http\Controllers\historycontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [logincontroller::class, 'index'])->name('login');
Route::post('/', [logincontroller::class, 'login']);
Route::get('/yuhu', [logincontroller::class, 'yuhu'])->name('yuhu');
Route::post('/register', [logincontroller::class, 'register'])->name('register');

Route::middleware(['auth'])->group(function(){
    Route::get('/user', [originalcontroller::class, "user"])->middleware("UserAkses:user")->name("user");
    Route::get('/karyawan', [originalcontroller::class, "karyawan"])->middleware("UserAkses:karyawan")->name("karyawan");
    Route::get('/admin', [originalcontroller::class, "admin"])->middleware("UserAkses:admin")->name("admin");
    Route::get('/logout', [logincontroller::class, "logout"])->name("logout");

    //posts
    Route::resource('/posts',\App\Http\Controllers\postscontroller::class );

    //posts
    Route::resource('/pinjam',\App\Http\Controllers\pinjamcontroller::class);

    //petugas
    Route::resource('/petugas', \App\Http\Controllers\petugascontroller::class);

    //peminjaman
    Route::resource('/lokasi', \App\Http\Controllers\lokasicontroller::class);

    //buku users
    Route::resource('/buku', \App\Http\Controllers\bukucontroller::class);

    Route::resource('/kategori', \App\Http\Controllers\kategoricontroller::class);

    Route::resource('/books', \App\Http\Controllers\peminjamancontroller::class);

    Route::resource('/pengembalian', \App\Http\Controllers\pengembaliancontroller::class);

    Route::resource('/history', \App\Http\Controllers\historycontroller::class);
});
