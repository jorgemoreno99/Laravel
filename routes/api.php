<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroControllerAPI;
use App\Http\Controllers\PrestamoControllerAPI;




//resource nos crea automaticamente todas las rutas basicas del crud. En el controlador es necesario crear los
// metodos con los nombres establecidos por resource. Son index store create show update y destroy.
// estos nombres se pueden ver haciendo  php artisan route:list una vez añadido el resource
Route::resource('libros', LibroControllerAPI::class);


Route::resource('prestamos', PrestamoControllerAPI::class);
Route::post('/devolver/{id}', [PrestamoControllerAPI::class, 'devolver'])->name('devolver');
