<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CalculosalarioController;

Route::get('/', [EmpleadoController::class, 'index'])->name('index')->middleware('auth');
Route::get('/create', [EmpleadoController::class, 'create'])->name('create');
Route::post('/store', [EmpleadoController::class, 'store'])->name('store');
Route::get('/edit/{empleado}', [EmpleadoController::class, 'edit'])->name('edit');
Route::put('/edit/update/{empleado}', [EmpleadoController::class, 'update'])->name('update');
Route::delete('/edit/delete/{empleado}', [EmpleadoController::class, 'delete'])->name('delete');

Route::get('/calculosalario/{empleado}', [CalculosalarioController::class, 'index'])->name('salario-index')->middleware('auth');


