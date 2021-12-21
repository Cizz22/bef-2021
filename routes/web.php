<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\DashboardController;
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
Route::get('/form', [LandingController::class, 'showForm'])->name('landing.form');
Route::post('/store', [LandingController::class, 'store'])->name('landing.form-store');


//Admin Route
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.auth.login');
    });


    Route::group(['middleware' => 'auth'], function () {
        //route dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
    });
});
