<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; //memanggil file login controller
use App\Http\Controllers\KameraController;

//Route itu berfungsi untuk menjalankan file blade di browser

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/katalog', function () {
    return view('shop-page.shoppage');
});


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

//untuk menampilkan dan menambahkan data di register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('actionregister', [LoginController::class, 'actionregister'])->name('actionregister');


//Group middleware auth(untuk mengecek apakah user sudah login atau belum)
Route::middleware('auth')->group(function () {
    Route::middleware('checkroles:1')->group(function (){
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/data-customer', [AdminController::class, 'tampilCustomer'])->name('tampil-customer');

        //fungsi crud admin
        Route::post('/tambah-admin', [AdminController::class, 'tambahAdmin'])->name('tambah-admin');
        Route::get('/data-admin', [AdminController::class, 'tampilAdmin'])->name('tampil-admin');
        Route::get('/edit-admin/{id}', [AdminController::class, 'editAdmin'])->name('edit-admin');
        Route::post('/update-admin/{id}', [AdminController::class, 'updateAdmin'])->name('update-admin');
        Route::delete('/hapus-admin/{id}', [AdminController::class, 'hapusAdmin'])->name('hapus-admin');

        // update profile
        Route::get('/edit-profile', [AdminController::class, 'editProfile'])->name('edit-profile');
        Route::post('/update-profile/{id}', [AdminController::class, 'updateProfile'])->name('update-profile');

        //update password
        Route::get('/edit-password', [AdminController::class, 'editPassword'])->name('edit-password');
        Route::post('/update-password', [AdminController::class, 'updaterPassword'])->name('update-password');
    });

    // Route::get('/dataproduk', [KameraController::class, 'index'])->name('kamera.index');

    Route::resource('kamera',KameraController::class);
    // //untuk menampilkan form ubah password
    // Route::get('/change-password', [LoginController::class, 'changePassword'])->name('change-password');
    // Route::post('/change-password', [LoginController::class, 'updatePassword'])->name('update-password');


    Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');
    Route::delete('/hapus-customer/{id}', [AdminController::class, 'hapusCustomer'])->name('hapus-customer');
});




