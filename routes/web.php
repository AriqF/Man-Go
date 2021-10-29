<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UpdateProfileInformationController;
use App\Models\User;

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

// user routes
Route::get('/profile', function () {
    return view('user/profile');
});
Route::get('/change-password', function () {
    return view('user/change-password');
});
Route::get('/stats', function () {
    return view('user/stats');
});
Route::get('/feedback', function () {
    return view('user/feedback');
});
Route::get('/hiragana', function () {
    return view('user/hiragana');
});
Route::get('/katakana', function () {
    return view('user/katakana');
});

//admin routes
Route::get('/admin-profile', function () {
    return view('admin/admin-profile');
});
Route::get('/change-admin-password', function () {
    return view('admin/admin-password');
});
// Route::get('/user-data', function () {
//     return view('admin/user-data');
// });
Route::get('/rating-data', function () {
    return view('admin/rating-data');
});





Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes(['verify' => true]); //untuk verifikasi email
//Auth::routes();

Route::get('adminHome', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('adminHome')->middleware('is_admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::put('update', [App\Http\Controllers\UpdateProfileInformationController::class, 'update'])->name('user.update');
// Route::put('update', [App\Http\Controllers\UpdateProfileInformationController::class, 'updateadmin'])->name('admin.update');

//Create User
Route::get('user-data',[App\Http\Controllers\UserController::class, 'user_data'])->name('admin.user-data');
Route::get('user-data/create',[App\Http\Controllers\UserController::class, 'create'])->name('admin.create');
Route::post('user-data',[App\Http\Controllers\UserController::class, 'store'])->name('admin.store');

//Edit User
Route::get('user-data/edit/{id}',[App\Http\Controllers\UserController::class, 'edit'])->name('admin.edit');

//Update User
Route::put('user-data/{id}',[App\Http\Controllers\UserController::class, 'update'])->name('admin.update');

//Delete User
Route::delete('user-data/{id}',[App\Http\Controllers\UserController::class, 'destroy'])->name('admin.destroy');
