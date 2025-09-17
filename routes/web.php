<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PengaduanController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


Route::get('/', [FrontendController::class, 'index']);
Route::get('/login', [FrontendController::class, 'login'])->name('login');
Route::post('/login/check', [FrontendController::class, 'check'])->name('login.check');
Route::get('/register', [FrontendController::class, 'register'])->name('register');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('pengaduan', [PengaduanController::class, 'index'])->name('pengaduan.index');

    Route::get('pengaduan/create-step-one', [PengaduanController::class,'createStepOne'])->name('pengaduan.create.step.one');
    Route::post('pengaduan/create-step-one', [PengaduanController::class, 'postCreateStepOne'])->name('pengaduan.create.step.one.post');
    Route::get('/regencies/{province_id}', [PengaduanController::class, 'getRegencies']);

    Route::get('pengaduan/create-step-two', [PengaduanController::class, 'createStepTwo'])->name('pengaduan.create.step.two');
    Route::post('pengaduan/create-step-two', [PengaduanController::class, 'postCreateStepTwo'])->name('pengaduan.create.step.two.post');

    Route::get('pengaduan/create-step-three', [PengaduanController::class, 'createStepThree'])->name('pengaduan.create.step.three');
    Route::post('pengaduan/create-step-three', [PengaduanController::class, 'postCreateStepThree'])->name('pengaduan.create.step.three.post');
});

require __DIR__ . '/auth.php';
