<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('email.isi_email');
});

Route::get('/adminIndex', [MahasiswaController::class, 'adminIndex']);
Route::get('/adminEdit', [MahasiswaController::class, 'adminEdit']);
Route::get('/adminAdd', [MahasiswaController::class, 'adminAdd']);

Route::get('/edit', [MahasiswaController::class, 'EditAdmin']);
Route::get('/delete/{id}', [MahasiswaController::class, 'DeleteAdmin']);

Route::post('/add', [MahasiswaController::class, 'AddAdmin']);
// Route::post('emailed', [MahasiswaController::class, 'sending_email']);
