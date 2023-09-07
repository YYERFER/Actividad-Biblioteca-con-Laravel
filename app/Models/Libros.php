<?php

namespace App\Models;

use App\Models\Libros as ModelsLibros;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;
use App\Models\Prestamos;

class Libros extends Model
{
    use HasFactory;

    public function prestamos(){
        return $this->belongsTo(Prestamos::class,'libros_id','id');
    }


    public static function create(Request $request){
        $libros = new Libros();
        $libros->titulo = $request->input('titulo');
        $libros->autor = $request->input('autor');
        $libros->anio_publicacion = $request->input('anio_publicacion');
        $libros->genero = $request->input('genero');
        $libros->disponible = $request->input('disponible');
        $libros->save();

        return $libros->id;

    }

    // Busca todos los libros
    public static function allLibros(){
        return Libros::all();
    }

    //Elimina un libro
    public static function destroyBook($id){
        $libros = Libros::find($id);
        $libros->delete();

    }

     //Actualizar y guardar un libro
     public static function updateBook($id){
        return Libros::find($id);
    }
        //Actualizar y guardar un libro para
        public static function updateForm($id, Request $request){
            $libros = Libros::find($id);
            $libros->titulo = $request->input('titulo');
            $libros->autor = $request->input('autor');
            $libros->anio_publicacion = $request->input('anio_publicacion');
            $libros->genero = $request->input('genero');
            // $libros->disponible = $request->input('disponible');
            $libros->save();
        }

    //Detallesde un libro
     public static function detailsBook($id){
        return Libros::find($id);
    }



    //Buscar un libro
    public static function searchBookGender($genero){
        return Libros::where('genero','LIKE','%'.$genero.'%')->get();
    }
    public static function searchBookTitle($titulo){
        return Libros::where('titulo','LIKE','%'.$titulo.'%')->get();
    }
    public static function searchBookAuthor($autor){
        return Libros::where('autor','LIKE','%'.$autor.'%')->get();
    }
    public static function searchBookDate($date){
        return Libros::where('anio_publicacion','LIKE','%'.$date.'%')->get();
    }

    public static function searchBookDateInterval($desde, $hasta){
        return Libros::where('anio_publicacion','>=', $desde)
                     ->where('anio_publicacion','<=', $hasta)
                     ->get();
    }



    // public static function create($titulo, $autor, $anio_publicacion, $genero, $disponible){
    //     $libros = new Libros();
    //     $libros->titulo = $titulo;
    //     $libros->autor = $autor;
    //     $libros->anio_publicacion = $anio_publicacion;
    //     $libros->genero = $genero;
    //     $libros->disponible = $disponible;
    //     $libros->save();
    // }

    // public static function updated($id){
    //     $libros = Libros::find($id);
    //     $libros->genero ='Física';
    //     $libros->save();
    // }

    // public static function destroy($id){
    //     $libros = Libros::find($id);
    //     $libros->delete();

    // }
    //Busqueda de un libro para prestamo
    public static function SearchBookLoan($id){
        return Libros::find($id);
    }

    public static function BooksId($id){
        return libros::find($id);
    }

}
