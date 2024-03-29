<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $table = 'prestamos';
    protected $fillable = ['user', 'book_id', 'fecha_prestamo', 'fecha_devolucion'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function libro()
    {
        return $this->belongsTo(Libro::class, 'book_id');
    }

    public static function getAll(){
        return Prestamo::all();
    }

    public static function getById($id){
        return Prestamo::find($id);
    }

    public static function getByTitle($titulo){
        return Prestamo::where('titulo', '=' , '$titulo');
    }

    public static function savePrestamo($user, $book_id , $fecha_prestamo , $fecha_devolucion ){
        $prestamo = new Prestamo;
        $prestamo->user  = $user;
        $prestamo->book_id = $book_id;
        $prestamo->fecha_prestamo = $fecha_prestamo;
        $prestamo->fecha_devolucion = $fecha_devolucion;
        $prestamo->save();
        return  $prestamo->id;
    }



    public static function updatePrestamo($id, $user, $book_id , $fecha_prestamo , $fecha_devolucion ){
        $prestamo = Prestamo::find($id);
        if( isset($prestamo) ){
            $prestamo->user  = $user;
            $prestamo->book_id = $book_id;
            $prestamo->fecha_prestamo = $fecha_prestamo;
            $prestamo->fecha_devolucion = $fecha_devolucion;
            $prestamo->save();
            return  $prestamo->id;
        }
        return  "Prestamo no encontrado";
    }

    public static function deletePrestamo($id){
        $prestamo = Prestamo::find($id);
        if( isset($prestamo) ){
            $prestamo->delete();
            return  "Ok";
        }
        return  "Prestamo no encontrado";
    }

    public static function devolver($id){
        Prestamo::where('id', $id)->update(['fecha_devolucion' => new DateTime()]);
    }


}
