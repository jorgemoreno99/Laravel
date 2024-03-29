<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Prestamo;

class Controller
{


    public function home(){
        return 'home';
    }

    public function mostrarFormularioAddLibro(){
        return view('addLibro');
    }

    public function showAllLibros(){
        $libros = Libro::getAll();
        return view('mostrarLibros', ['libros' => $libros]);
    }


    public function mostrarDetalles($id){
        $libro = Libro::getById($id);
        if (!isset($libro)) {
            return "Libro no existe";
        }else{
            return view('verDetalleLibro', ['libro' => $libro]);
        }
    }


    public function editarLibro($id){
        $libro = Libro::getById($id);
        if (!isset($libro)) {
            return "Libro no existe";
        }else{
            return view('editarLibro', ['libro' => $libro]);
        }
    }



    public function mostrarFormularioAddPrestamo(){
        return view('addPrestamo');
    }



    public function showAllPrestamos(){
        $prestamos = Prestamo::getAll();
        return view('mostrarPrestamos', ['prestamos' => $prestamos]);
    }

    public function mostrarDetallesPrestamo($id){
        $prestamo = Prestamo::getById($id);
        $libro = Libro::getById($prestamo->book_id);

        if (!isset($prestamo)) {
            return "Prestamo no existe";
        }else{
            return view('verDetallePrestamo', ['prestamo' => $prestamo,'libro' => $libro,]);
        }
    }
}
