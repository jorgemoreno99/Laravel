<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;


class LibroControllerAPI extends Controller
{
    public function index(){
        return Libro::getAll();
    }

    public function store(Request $data){
        Libro::saveLibro(
            $data->input('titulo'),
            $data->input('autor'),
            $data->input('fecha_publicacion'));
        return Controller::showAllLibros();
    }

    public function show($id){
        return Libro::getById($id);
    }

    public function update(Request $data,  $id){
        Libro::updateLibro(
            $id,
            $data->input('titulo'),
            $data->input('autor'),
            $data->input('fecha_publicacion'));
        return Controller::showAllLibros();

    }


    public function destroy($id){
        Libro::deleteLibro($id);
        return Controller::showAllLibros();

    }
}



