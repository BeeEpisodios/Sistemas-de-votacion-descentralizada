<?php

use App\Http\Controllers\VotoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get("/", [VotoController::class, 'index'])->name('principal');

Route::post("/voto-guardado", [VotoController::class, 'guardarVoto'])->name('guardarVoto');
Route::get('/voto-exito', function (Request $request) {
  return view('success', ['txid' => $request->query('txid')]);
})->name('voto.exito');
