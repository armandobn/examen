<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegistrerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[SessionsController::class, 'index'])->name('usuario.index')->middleware('guest');
Route::post('/',[SessionsController::class, 'store'])->name('session.store');
Route::get('/logout',[SessionsController::class, 'destroy'])->name('usuario.destroy');

Route::get('/createUser',[RegistrerController::class, 'create'])->name('usuario.create')->middleware('guest');
Route::post('/createUser',[RegistrerController::class, 'store'])->name('usuario.store');
