<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table = 'libros';
    protected $fillable = ['titulo', 'autor', 'fecha_publicacion', 'disponible'];


    public static function getAll(){
        return Libro::all();
    }

    public static function getById($id){
        return Libro::find($id);
    }

    public static function getByTitle($titulo){
        return Libro::where('titulo', '=' , '$titulo');
    }

    public static function saveLibro($titulo, $autor, $fecha_publicacion){
        $libro = new Libro;
        $libro->titulo = $titulo;
        $libro->autor = $autor;
        $libro->fecha_publicacion = $fecha_publicacion;
        $libro->save();
        return  $libro->id;
    }



    public static function updateLibro($id, $titulo, $autor, $fecha_publicacion){
        $libro = Libro::find($id);
        if( isset($libro) ){
            $libro->titulo = $titulo;
            $libro->autor = $autor;
            $libro->fecha_publicacion = $fecha_publicacion;
            $libro->save();
            return  $libro->id;
        }
        return  "Libro no encontrado";
    }

    public static function deleteLibro($id){
        $libro = Libro::find($id);
        if( isset($libro) ){
            $libro->delete();
            return  "Ok";
        }
        return  "Libro no encontrado";
    }

    public static function reservar($id){
        Libro::where('id', $id)->update(['disponible' => false]);
    }

    public static function devolver($id){
        Libro::where('id', $id)->update(['disponible' => true]);
    }

}
