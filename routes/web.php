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
// Route::get('/profile', function () {
//     return view('user/profile');
// });
// Route::get('/change-password', function () {
//     return view('user/change-password');
// });
// Route::get('/stats', function () {
//     return view('user/stats');
// });
// Route::get('/feedback', function () {
//     return view('user/feedback');
// });
// Route::get('/hiragana', function () {
//     return view('user/hiragana');
// });
// Route::get('/katakana', function () {
//     return view('user/katakana');
// });

//admin routes
// Route::get('/admin-profile', function () {
//     return view('admin/admin-profile');
// });
// Route::get('/change-admin-password', function () {
//     return view('admin/admin-password');
// });
// Route::get('/user-data', function () {
//     return view('admin/user-data');
// });
Route::get('/rating-data', function () {
    return view('admin/rating-data');
});






// ------------------------------------  USER ------------------------------------ //
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes(['verify' => true]); //untuk verifikasi email
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// stats user
Route::get('stats', [App\Http\Controllers\HomeController::class, 'stats'])->name('stats');
// profile user
Route::get('profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
// profile update user
Route::put('update', [App\Http\Controllers\UpdateProfileInformationController::class, 'update'])->name('user.update');
// Route::put('update', [App\Http\Controllers\UpdateProfileInformationController::class, 'updateadmin'])->name('admin.update');
// feedback user
Route::get('feedback', [App\Http\Controllers\HomeController::class, 'feedback'])->name('feedback');
// change password user
Route::get('change-password', [App\Http\Controllers\HomeController::class, 'change_password'])->name('change-password');
// Hiragana user
Route::get('hiragana', [App\Http\Controllers\HomeController::class, 'hiragana'])->name('hiragana');
// Hiragana user
Route::get('katakana', [App\Http\Controllers\HomeController::class, 'katakana'])->name('katakana');





// ------------------------------------  ADMIN ------------------------------------ //

// Admin home
Route::get('admin-home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('adminHome')->middleware('is_admin');

// Admin profile
Route::get('admin-profile', [App\Http\Controllers\HomeController::class, 'admin_profile'])->name('admin-profile')->middleware('is_admin');

// Admin change password
Route::get('change-admin-password', [App\Http\Controllers\HomeController::class, 'change_admin_password'])->name('change-admin-password')->middleware('is_admin');

// Admin change password
Route::get('rating-data', [App\Http\Controllers\HomeController::class, 'rating_data'])->name('rating-data')->middleware('is_admin');

//Create User
Route::get('user-data',[App\Http\Controllers\UserController::class, 'user_data'])->name('admin.user-data')->middleware('is_admin');
Route::get('user-data/create',[App\Http\Controllers\UserController::class, 'create'])->name('admin.create')->middleware('is_admin');
Route::post('user-data',[App\Http\Controllers\UserController::class, 'store'])->name('admin.store')->middleware('is_admin');

//Edit User
Route::get('user-data/edit/{id}',[App\Http\Controllers\UserController::class, 'edit'])->name('admin.edit')->middleware('is_admin');

//Update User
Route::put('user-data/{id}',[App\Http\Controllers\UserController::class, 'update'])->name('admin.update')->middleware('is_admin');

//Delete User
Route::delete('user-data/{id}',[App\Http\Controllers\UserController::class, 'destroy'])->name('admin.destroy')->middleware('is_admin');
