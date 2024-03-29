<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Libro;
use App\Models\Prestamo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class PrestamoControllerAPI extends Controller
{
    public function index(){
        return Prestamo::getAll();
    }

    public function store(Request $data){

        $libro = Libro::getById($data->input('book_id'));
        if (!isset($libro)) {
            return "Libro no existe";
        }else{
            $libroDisponible = $libro->disponible;
            if(!$libroDisponible){
                return "Libro " . $libro->titulo . " no disponible";
            }else{
                Libro::reservar($data->input('book_id'));
                Prestamo::savePrestamo(
                    $data->input('user'),
                    $data->input('book_id'),
                    new DateTime(),
                    null
                );
                return Controller::showAllPrestamos();
            }

        }

    }

    public function show($id){
        return Prestamo::getById($id);
    }

    public function update(Request $data){
        Prestamo::updatePrestamo(
            $data->input('id'),
            $data->input('user'),
            $data->input('book_id'),
            $data->input('fecha_prestamo'),
            $data->input('fecha_devolucion')
        );
        return Controller::showAllPrestamos();

    }


    public function destroy($id){
        Prestamo::deletePrestamo($id);
        return Controller::showAllPrestamos();

    }


    public function devolver(Request $request, $id){
        $prestamo = Prestamo::getById($id);
        $libro = Libro::getById($prestamo->book_id);

        Prestamo::devolver($prestamo->id);
        Libro::devolver($libro->id);
        return Controller::showAllPrestamos();

    }
}
