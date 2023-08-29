<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;
use App\Models\Libros;

class Prestamos extends Model
{
    use HasFactory;

    protected $table='prestamos';

    public function libros(){
        return $this->belongsTo(Libros::class,'Book_id' , 'id' );
    }

    public static function create(Request $request){
        $prestamo = new Libros();

        $prestamo->fecha_prestamo = $request->input('fecha_prestamo');
        $prestamo->fecha_devolucion = $request->input('fecha_devolucion');

        $prestamo->save();

        return $prestamo->id;

    }


     //Detallesde un libro
    //  public static function showBooksP(){
    //     return Prestamos::all();
    // }

     // Busca todos los Prestamos
     public static function allPrestamos(){
        return Prestamos::all();
    }


     //Formulario de Prestamo
     public static function showPrestamoFormulario($id){
        return Libros::find($id);
    }


    //Crea un Préstamo y actualiza libro
    public static function createPrestamo($id,Request $request){
        $libro = Libros::BooksId($id);
        $libro->disponible='NO';
        $libro->save();
        $prestamos = new Prestamos();
        $prestamos->fecha_prestamo = $request->input('fecha_prestamo');
        $prestamos->Book_id= $id;
        $prestamos->save();

    }

    //Detalles de Prestamo
    public static function detailsPrestamo($id){
        return Prestamos::find($id);
    }


    //Elimina un libro
    public static function destroyPrestamo($id){
        $prestamos = Prestamos::find($id);
        $prestamos->libros->disponible = 'SI';
        $prestamos->libros->save();
        $prestamos = Prestamos::find($id);
        $prestamos->delete();

}

 //Formulario de Prestamo
 public static function returnPrestamoFormulario($id){
    return Libros::find($id);
}


 //Actualizar Devolución del libro
 public static function updateDevolucion($id,Request $request){
    $prestamos = Prestamos::find($id);
    $prestamos->fecha_devolucion = $request->input('fecha_devolucion');
    $prestamos->save();

    $libro = Libros::BooksId($id);
    $prestamos->libros->disponible = 'SI';
    $prestamos->libros->save();

    // $libro = Libros::findBooksId($id);
    // $prestamos = Prestamos::find($id);
    // $libro->disponible='SI';
    // $libro->save();
    // $prestamos = new Prestamos();
    // $prestamos->fecha_devolucion = $request->input('fecha_devolucion');
    // $prestamos->Book_id= $id;
    // $prestamos->save();

}




}
