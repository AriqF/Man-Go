<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});

// user page
Route::get('/profile', function () {
    return view('user/profile');
});
Route::get('/change-password', function () {
    return view('user/change-password');
});
Route::get('/stats', function () {
    return view('user/stats');
});
Route::get('/hiragana', function () {
    return view('user/hiragana');
});
Route::get('/katakana', function () {
    return view('user/katakana');
});




Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes(['verify' => true]); //untuk verifikasi email
//Auth::routes();

Route::get('adminHome', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('adminHome')->middleware('is_admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
