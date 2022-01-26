<?php

use App\Http\Controllers\MesinController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ParameterController;
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

// Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');

Route::get('/', function () {
    return view('auth/login');
});

Route::resource('machines', MesinController::class);
Route::resource('users', UserController::class);
Route::resource('parameters', ParameterController::class);

// route history 
Route::get('/history/history', function () {
    return view('/history/history');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
