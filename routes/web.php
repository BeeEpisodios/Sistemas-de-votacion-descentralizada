<?php

use App\Http\Controllers\VotoController;
use Illuminate\Support\Facades\Route;


Route::get("/", [VotoController::class, 'index'])->name('principal');
Route::post("/voto-guardado", [VotoController::class, 'guardarVoto'])->name('guardarVoto');
