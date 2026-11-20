<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaestroController;
use App\Http\Controllers\MateriaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/maestro', [MaestroController::class, 'index'])->name('maestros.index');
Route::get('/materia', [MateriaController::class, 'index'])->name('materias.index');