<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PenghuniController;
use App\Http\Controllers\ProfileController;
use App\Models\kamar;
use App\Models\penghuni;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/detailTawaran', function () {
    return view('user.detailTawaran');
});
Route::post('/tulisPesan', [ContactController::class, 'tulisPesan'])->name('tulisPesan');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/penghuni', [PenghuniController::class, 'viewPenghuni'])->middleware(['auth', 'verified'])->name('penghuni');
Route::get('/detail-penghuni/{id}', [PenghuniController::class, 'detailPenghuni'])->middleware(['auth', 'verified'])->name('detail.penghuni');
Route::get('/tambah-penghuni', [PenghuniController::class, 'penghuni'])->middleware(['auth', 'verified'])->name('tambah.penghuni');
Route::post('/tambah-penghuni', [PenghuniController::class, 'addPenghuni'])->name('add.penghuni');
Route::get('/edit-penghuni/{id}', [PenghuniController::class, 'viewEditPenghuni'])->name('edit.penghuni');
Route::post('/edit-penghuni/{id}', [PenghuniController::class, 'editPenghuni'])->name('update.penghuni');
Route::delete('/delete-penghuni/{id}', [PenghuniController::class, 'deletePenghuni'])->name('delete.penghuni');

Route::get('/kamar', function () {
    $kamar = kamar::all();
    return view('/admin.kamar', compact('kamar'));
})->middleware(['auth', 'verified'])->name('kamar');
Route::get('/tambah-kamar', function () {
    return view('/admin.AddKamar');
})->middleware(['auth', 'verified'])->name('tambah.kamar');
Route::post('/tambah-kamar', [KamarController::class, 'addKamar'])->name('add.kamar');
Route::get('/edit-kamar/{id}', [KamarController::class, 'editKamar'])->middleware(['auth', 'verified'])->name('edit.kamar');
Route::post('/edit-kamar/{id}', [KamarController::class, 'updateKamar'])->name('update.kamar');

Route::get('/pesan', [ContactController::class, 'dataPesan'])->name('pesan');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
