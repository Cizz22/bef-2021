<?php

use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PesertaListController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Landing Route
Route::get('/', [LandingController::class, 'index'])->name('landing.about');
Route::get('/dokumentasi', [LandingController::class, 'showDocum'])->name('landing.dokumentasi');
Route::get('/blogs', [LandingController::class, 'showBlogs'])->name('landing.blogs');
Route::get('/post/{slug}', [LandingController::class, 'showPost'])->name('landing.post');
Route::get('/coming-soon', [LandingController::class, 'soon'])->name('landing.coming_soon');
Route::get('/form', [LandingController::class, 'showForm'])->name('landing.form');
Route::post('/store', [LandingController::class, 'store'])->name('landing.form-store');
Route::get('/pick-form', [LandingController::class,'pickForm'])->name('landing.pick-form');
Route::get('/form-mahasiswa', [LandingController::class, 'showFormMahasiswa'])->name('landing.form-mahasiswa');
Route::get('/contact', [LandingController::class,'contact'])->name('landing.contact');

//Admin Route
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.auth.login');
    });

    Route::group(['middleware' => 'auth'], function () {
        //route dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
        Route::get('/listpesertaTO', [PesertaListController::class, 'pesertaTO'])->name('admin.peserta.TO');
        Route::get('/listpesertaExpo', [PesertaListController::class, 'pesertaExpoKampus'])->name('admin.peserta.Expo');
        Route::get('/konfirmasibayar', [PesertaListController::class, 'konfirmasibayar'])->name('admin.konfirmasibayar.index');
        Route::get('/detailPeserta/{id}', [PesertaListController::class,'detailPeserta'])->name('admin.detailPeserta');
        Route::get('/terimaPembayaran/{id}', [PesertaListController::class,'terimaPembayaran']);
        Route::get('/tolakPembayaran/{id}', [PesertaListController::class,'tolakPembayaran']);
        Route::get('/blogs', [BlogsController::class,'index'])->name('admin.blogs.index');
        Route::get('/blogs/tambah', [BlogsController::class,'tambah'])->name('admin.blogs.tambah');
        Route::post('/blogs/store', [BlogsController::class,'store'])->name('admin.blogs.store');
        Route::get('/blogs/edit/{id}', [BlogsController::class,'edit'])->name('admin.blogs.edit');
        Route::put('/blogs/update/{id}', [BlogsController::class,'update'])->name('admin.blogs.update');
        Route::delete('/blogs/delete/{id}', [BlogsController::class,'delete'])->name('admin.blogs.delete');

        //Excel Export Route
        Route::get('export/mahasiswa', [PesertaListController::class, 'exportPesertaMahasiswa'])->name('export.mahasiswa');
        Route::get('export/sma', [PesertaListController::class, 'exportPesertaSMA'])->name('export.SMA');
    });
});

