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
Route::get('/signin', [FrontendController::class, 'signin'])->name('signin');
Route::post('/signin/check', [FrontendController::class, 'check'])->name('signin.check');
Route::get('/signup', [FrontendController::class, 'signup'])->name('signup');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('pengaduan', [PengaduanController::class, 'index'])->name('pengaduan.index');

    Route::get('pengaduan/create-step-one', [PengaduanController::class, 'createStepOne'])->name('pengaduan.create.step.one');
    Route::post('pengaduan/create-step-one', [PengaduanController::class, 'postCreateStepOne'])->name('pengaduan.create.step.one.post');
    Route::get('/regencies/{province_id}', [PengaduanController::class, 'getRegencies']);

    Route::get('pengaduan/create-step-two', [PengaduanController::class, 'createStepTwo'])->name('pengaduan.create.step.two');
    Route::post('pengaduan/create-step-two', [PengaduanController::class, 'postCreateStepTwo'])->name('pengaduan.create.step.two.post');
    // hapus pelapor dari session
    Route::delete('pengaduan/pelapor/{index}', [PengaduanController::class, 'removePelapor'])->name('pengaduan.pelapor.remove');

    Route::get('pengaduan/create-step-three', [PengaduanController::class, 'createStepThree'])->name('pengaduan.create.step.three');
    Route::post('pengaduan/create-step-three', [PengaduanController::class, 'postCreateStepThree'])->name('pengaduan.create.step.three.post');
    Route::post('/pengaduan/step-three/add-lampiran', [PengaduanController::class, 'addLampiranStepThree'])->name('pengaduan.step.three.add.lampiran');
    Route::delete('/pengaduan/step-three/remove-lampiran/{index}', [PengaduanController::class, 'removeLampiranStepThree'])->name('pengaduan.step.three.remove.lampiran');
    Route::delete('/pengaduan/file/{id}', [PengaduanController::class, 'deleteFile'])->name('pengaduan.file.delete');



    Route::get('/pengaduan/{id}/edit/step-1', [PengaduanController::class, 'editStepOne'])->name('pengaduan.edit.step.one');

    Route::post('/pengaduan/{id}/edit/step-1', [PengaduanController::class, 'postEditStepOne'])->name('pengaduan.edit.step.one.post');

    Route::get('/pengaduan/{id}/edit/step-2', [PengaduanController::class, 'editStepTwo'])->name('pengaduan.edit.step.two');
    Route::post('/pengaduan/{id}/edit/step-2', [PengaduanController::class, 'postEditStepTwo'])->name('pengaduan.edit.step.two.post');
    Route::delete('/pengaduan/{id}/pelapor/remove/{index}', [PengaduanController::class, 'removePelaporSession'])
    ->name('pengaduan.pelapor.remove.session');


    Route::get('/pengaduan/{id}/edit/step-3', [PengaduanController::class, 'editStepThree'])->name('pengaduan.edit.step.three');
    Route::post('/pengaduan/{id}/edit/step-3', [PengaduanController::class, 'postEditStepThree'])->name('pengaduan.edit.step.three.post');

    Route::post('/pengaduan/{id}/edit/step-three/add-lampiran', [PengaduanController::class, 'addLampiranEditStepThree'])
        ->name('pengaduan.edit.step.three.add.lampiran');

    Route::delete('/pengaduan/{id}/edit/step-three/remove-lampiran/{index}', [PengaduanController::class, 'removeLampiranEditStepThree'])
        ->name('pengaduan.edit.step.three.remove.lampiran');

    Route::get('/pengaduan/{id}', [PengaduanController::class, 'show'])->name('pengaduan.show');
    Route::delete('/pengaduan/{id}', [PengaduanController::class, 'destroy'])->name('pengaduan.destroy');

});

require __DIR__ . '/auth.php';
