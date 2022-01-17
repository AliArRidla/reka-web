<?php

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

// Route::get('/auth/login', function () {
//     return view('auth/login');
// });

// Route::get('/auth/register', function () {
//     return view('auth/register');
// });

// Route::get('/auth/forgot-password', function () {
//     return view('auth/forgot-password');
// });

// Route::get('/auth/reset-password', function () {
//     return view('auth/reset-password');
// });


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//  ini adalah route mesin 
Route::get('/machines/add_mesin', function () {
    return view('machines/add_mesin');
});

Route::get('/machines/list_mesin', function () {
    return view('machines/list_mesin');
});

Route::get('/machines/edit_mesin', function () {
    return view('machines/edit_mesin');
});

// route users
Route::get('/users/add_users', function () {
    return view('users/add_users');
});

Route::get('/users/list_users', function () {
    return view('users/list_users');
});

Route::get('/users/edit_users', function () {
    return view('users/edit_users');
});

// route history
Route::get('/history/history', function () {
    return view('/history/history');
});

//route profile menu
Route::get('/profile/view_profile', function () {
    return view('/profile/view_profile');
});

Route::get('/profile/edit_profile', function () {
    return view('/profile/edit_profile');
}); 

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');
