<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Prestamos;
use Illuminate\Http\Request;


use App\Models\Libros;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class PrestamosController extends Controller
{
    public function showPrueba(){
        dd(Prestamos::find(1)->libros);
    }


    public function showBooksP(Request $request){
        $prestamos = Prestamos::all();

        if(isset($prestamos)){
            foreach($prestamos as $prestar){
                if($prestar->libros->disponible == 'SI'){
                    return $prestar->libros;
                }

            }

            return view('biblioteca/prestamos/addPrestamosOk_Formulario.blade');

        }else{
            return 'Libro No existe';
        }
    }






 //Mostrar todos los Préstamos
 public function showAllPrestamos(){
    // $prestamos = Prestamos::allPrestamos();
    // return view('biblioteca/prestamos/showAllPrestamos',  [ 'prestamos' => $prestamos ]);
    $prestamos = Prestamos::allPrestamos();
    $resultado = [];
        if(isset($prestamos)){
            foreach($prestamos as $prestar){
                if($prestar->libros->disponible){
                $resultado[] = $prestar;
                $resultado   = collect($resultado);
                }
            }
            return view('biblioteca/prestamos/showAllPrestamos', compact('prestamos', 'resultado') );
            // [ 'prestamos' => $resultado ]
        }
    }


     //mostrar el formulario de Guardar prestamo
     public function showPrestamoForm($id){
        $libro = Prestamos::showPrestamoFormulario($id);
        $fecha=date("d/m/y");
        Session::put('id', $id);
        if($libro->disponible == 'SI'){
             return view('biblioteca/prestamos/addPrestamos_Formulario', compact('libro', 'fecha') );
        }else{
            return view( 'biblioteca/prestamos/addPrestamosOk_Formulario', [ 'libro' => $libro ] );
        }
    }


        // Añadiendo un Prestamo en la base de datos
    public function addPrestamoFormulario( Request $request){
        // $id = Libros::create($request);
        $id = Session::get('id');
        Prestamos::createPrestamo($id, $request);
        // return view('biblioteca/addLibrosOk_Formulario', [ 'id' => $id_libros ]);

        return Redirect::to('/showPrestamos');
    }


    //Detalles Prestmos
    public function detailsPrestamo($id){
        // $libro = Libros::detailsPrestamo($id);
        // Session::put('id', $id);
        // return view('biblioteca/detailsPrestamo', [ 'libro' => $libro ]);


        // $prestamos = Prestamos::allPrestamos();
        $prestamos = Prestamos::detailsPrestamo($id);
        // $resultado = [];
        //     if(isset($prestamos)){
        //         foreach($prestamos as $prestar){
        //             if($prestar->libros->id == $id){
        //             $resultado[] = $prestar;
        //             $resultado   = collect($resultado);
        //             }
        //         }
                return view('biblioteca/prestamos/detailsPrestamo',  [ 'prestamos' => $prestamos ]);
            // }

    }


      //Eliminar un Prestamo de la BD
      public function deletePrestamo($id){
        Prestamos::destroyPrestamo($id);
        return Redirect::to('/showPrestamos');
        // self::showAllLibros();

    }


    //mostrar el formulario de Devolución de prestamo
    public function returnPrestamoForm($id){
        $libro = Prestamos::returnPrestamoFormulario($id);
        $prestamos = Prestamos::find($id);

        $fecha_devolucion=date("d/m/y");
        Session::put('id', $id);
        if($prestamos->libros->disponible == 'NO'){
             return view('biblioteca/prestamos/returnPrestamos_Formulario', compact('prestamos', 'fecha_devolucion') );
        }else{
            return view( 'biblioteca/prestamos/msjDevolucion_Formulario', compact('prestamos') );
        }
    }


         // Actualizando la devolución en la base de datos
         public function retunDevolucion( Request $request){
            // $id = Libros::create($request);
            $id = Session::get('id');
            Prestamos::updateDevolucion($id, $request);
            // return view('biblioteca/addLibrosOk_Formulario', [ 'id' => $id_libros ]);

            return Redirect::to('/showPrestamos');
        }






}
