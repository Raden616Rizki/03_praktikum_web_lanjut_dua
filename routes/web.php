<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengalamanController;

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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index']) -> name('home');
<<<<<<< HEAD
// Route::get('/home', [HomeController::class, 'index']) -> name('home');
=======
>>>>>>> 090fa538795fb1f021d7ec56a027f047c37544c2

Route::prefix('profil') -> group (function () {
    Route::get('/rafi', [ProfileController::class, 'rafi']);
    Route::get('/raden', [ProfileController::class, 'raden']);
}) -> name('profil');

Route::get('/pengalaman', [PengalamanController::class, 'pengalaman']) -> name('pengalaman');
