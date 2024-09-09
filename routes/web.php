<?php

use App\Http\Controllers\TamuController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('registrasi');
});



Route::post('regprocess', [TamuController::class, 'regprocess']);
Route::get('reg_simpan', [TamuController::class, 'reg_simpan']);

