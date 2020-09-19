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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/view', function () {
    return view('users.app');
});
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index']);
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'signin'])->name('login');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index']);
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'signup'])->name('signup');
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'index']);
