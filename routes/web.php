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

// Route::prefix('profil') -> group (function () {
//     // Route::get('/rafi', [ProfileController::class, 'rafi']);
//     // Route::get('/raden', [ProfileController::class, 'raden']);
//     Route::get('/{slug}', [ProfileController::class, 'profil']);
// }) -> name('profil');

Route::get('/profil/{slug}', [ProfileController::class, 'profil']) -> name('profil');

Route::get('/pengalaman', [PengalamanController::class, 'pengalaman']) -> name('pengalaman');
