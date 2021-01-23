<?php

use Illuminate\Support\Facades\Route;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Route::post('/save_profile', [App\Http\Controllers\ProfileController::class, 'save_profile'])->name('save_profile');

Route::get('/opportunity', [App\Http\Controllers\HomeController::class, 'opportunity'])->name('opportunity');

Route::post('/add_opportunity', [App\Http\Controllers\HomeController::class, 'add_opportunity'])->name('add_opportunity');


