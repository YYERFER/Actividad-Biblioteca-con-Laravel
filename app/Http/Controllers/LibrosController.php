<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Libros;
use App\Models\Prestamos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LibrosController extends Controller
{
    // public function addLibros(){
    //     $titulo='Algebra';
    //     $autor='Navarro';
    //     $anio_publicacion=1998;
    //     $genero = 'Matematica';
    //     $disponible = false;

    //     Libros::create($titulo, $autor, $anio_publicacion, $genero, $disponible);

    // }



    // public function updateLibros(){
    //     Libros::updated(1);

    // }

    //  public function deleteLibros(){
    //     Libros::destroy(1);

    // }


    // Vista Principal de la Aplicación
     public function appBiblioteca(Request $request){
        return view('image');
    }

    // Solo Visualizar el Formulario
    public function showFormularioAddLibros(){
        // $titulo = 'Añadir un Nuevo Libro';    , compact('titulo')
        return view('biblioteca/addLibros_Formulario');
    }

    // Añadiendo un libro en la base de datos
    public function addLibrosFormulario(Request $request){
        $id_libros = Libros::create($request);
        return view('biblioteca/addLibrosOk_Formulario', [ 'id' => $id_libros ]);
    }


    //Mostrar todos los libros
    public function showAllLibros(){
        $libros = Libros::allLibros();
        return view('biblioteca/showAllLibros',  [ 'libros' => $libros ]);
    }

     //Eliminar un Libro de la BD
     public function deleteBook($id){

        // self::showAllLibros();
        $libro = Libros::find($id);
        if($libro->disponible == 'SI'){
            Libros::destroyBook($id);
            return Redirect::to('/showBooks');
        }else{
            return view( 'biblioteca/msjEliminarLibro_Formulario', compact('libro') );
        }
    }


     //Actualizar y guardar un Libro de la BD
     public function updateBookForm($id){
        $libro = Libros::updateBook($id);
        Session::put('id', $id);
        return view('biblioteca/mostrarDatosLibrosForm', [ 'libro' => $libro ]);
        // dd($libro);
    }

                //Actualizar y guardar un Libro de la BD
                public function updateBook(Request $request){
                    $id = Session::get('id');
                    Libros::updateForm($id, $request);
                    return Redirect::to('/showBooks');
                }


     //Detalles
     public function detailsBook($id){
        $libro = Libros::detailsBook($id);
        Session::put('id', $id);
        return view('biblioteca/detailsBook', [ 'libro' => $libro ]);

    }
                public function details(){
                    return Redirect::to('/showBooks');
                }


    public function searchBooksGender(Request $request){
        $genero = Libros::searchBookGender( $request->input('genero') );
        if($genero!==''){
        return view('biblioteca/showAllLibros', [ 'libros' => $genero ]);
        }else{
            return Redirect::to('/showBooks');
        }
        // $texto = trim($request->get('texto'));
        // $libro =DB::table('libros')->select('titulo','autor','anio_publicacion','genero','disponible')
        // ->where('genero','LIKE','%'.$texto.'%')
        // ->orWhere('titulo','LIKE','%'.$texto.'%');
        // Session::put('genero', $genero);
        // return view('biblioteca/showAllLibros', [ 'libro' => $libro , 'texto' => $texto ]);
        // compact('clientes','texto')

    }

    public function searchBooksTitle(Request $request){
        $title = Libros::searchBookTitle( $request->input('titulo') );
        if($title!==''){
        return view('biblioteca/showAllLibros', [ 'libros' => $title ]);
        }else{
            return Redirect::to('/showBooks');
        }
    }
    public function searchBooksAuthor(Request $request){
        $autor = Libros::searchBookAuthor( $request->input('autor') );
        if($autor!==''){
        return view('biblioteca/showAllLibros', [ 'libros' => $autor ]);
        }else{
            return Redirect::to('/showBooks');
        }
    }

    public function searchBooksDate(Request $request){
        $date = Libros::searchBookDate( $request->input('anio') );
        if($date!==''){
        return view('biblioteca/showAllLibros', [ 'libros' => $date ]);
        }else{
            return Redirect::to('/showBooks');
        }
    }







    public function alertBad(){
        return view('alertBad');
    }









    // public function showPrestamo($id){
    //     $prestamos = Prestamos::showPrestamos($id);

    //     if(isset($prestamos)){
    //         foreach($prestamos as $prestar){
    //             if($prestar->libros->disponible == 'SI'){
    //                 return $prestar->libros;
    //             }

    //         }

    //         return view('biblioteca/prestamos/addPrestamosOk_Formulario.blade');

    //     }else{
    //         return 'Libro No existe';
    //     }
    // }

    // public function showPrestamoForm(){
        // $libro = Libros::showPrestamoForm($id);
        // Session::put('id', $id);

        // return view('biblioteca/prestamos/addPrestamos_Formulario');
    //  }

}
