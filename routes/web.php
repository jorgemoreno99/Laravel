<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroCrudController;
use App\Http\Controllers\PrestamoControllerAPI;



// Route::get('/addLibro', [LibroCrudController::class, 'mostrarFormularioAdd']);
// Route::post('/addLibroPost', [LibroCrudController::class, 'addLibro'])->name('addLibro');

// Route::get('/addPrestamo', [LibroCrudController::class, 'mostrarFormularioPrestamoAdd']);
// Route::post('/addPrestamoPost', [LibroCrudController::class, 'addPrestamoPost'])->name('addPrestamoPost');


// Rutas para el controlador de libros
Route::get('/newLibro', [Controller::class, 'mostrarFormularioAddLibro']);
Route::get('/libros', [Controller::class, 'showAllLibros'])->name('mostrarLibros');
Route::get('/libros/{id}', [Controller::class, 'mostrarDetalles'])->name('mostrarDetalles');
Route::get('/libros/{id}/editar', [Controller::class, 'editarLibro'])->name('editarLibro');
Route::put('/libros/{id}', [Controller::class, 'actualizarLibro'])->name('actualizarLibro');

// Rutas para el controlador de préstamos
Route::get('/newPrestamo', [Controller::class, 'mostrarFormularioAddPrestamo'])->name('mostrarFormularioAddPrestamo');
Route::get('/prestamos', [Controller::class, 'showAllPrestamos'])->name('showAllPrestamos');
Route::get('/prestamos/{id}', [Controller::class, 'mostrarDetallesPrestamo'])->name('mostrarDetallesPrestamo');
