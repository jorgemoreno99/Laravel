<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroCrudController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [Controller::class, 'home']);

Route::get('/addLibro', [LibroCrudController::class, 'mostrarFormularioAdd']);
Route::post('/addLibroPost', [LibroCrudController::class, 'addLibro'])->name('addLibro');

Route::get('/addPrestamo', [LibroCrudController::class, 'mostrarFormularioPrestamoAdd']);
Route::post('/addPrestamoPost', [LibroCrudController::class, 'addPrestamoPost'])->name('addPrestamoPost');


