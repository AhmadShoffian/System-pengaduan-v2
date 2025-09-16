<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index']);
Route::get('/login', [FrontendController::class, 'login'])->name('login');
Route::post('/login/check', [FrontendController::class, 'check'])->name('login.check');
Route::get('/register', [FrontendController::class, 'register'])->name('register');

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
    


