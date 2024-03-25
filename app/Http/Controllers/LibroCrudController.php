<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Prestamo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LibroCrudController extends Controller
{
    public function mostrarFormularioAdd(){
        return view('addLibro');
    }

    public function addLibro(Request $data){
        Libro::saveLibro(
            $data->input('titulo'),
            $data->input('autor'),
            $data->input('fecha_publicacion')
        );

    }

    public function getAllLibros(){
        $libros = Libro::getAll();
        return view('addLibro', ['libros' => $libros]);
    }


    public function mostrarFormularioPrestamoAdd(){
        return view('addPrestamo');
    }


    public function addPrestamoPost(Request $data){
        Prestamo::savePrestamo(
            $data->input('user'),
            $data->input('book_id'),
            $data->input('fecha_prestamo'),
            $data->input('fecha_devolucion')
        );

    }
}
