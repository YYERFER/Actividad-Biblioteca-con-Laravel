<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibrosController;
use App\Http\Controllers\PrestamosController;
use App\Models\Prestamos;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',


 function () {
    return view('welcome');
});

// Vista Principal
Route::get('/home', [LibrosController::class, 'appBiblioteca']);

// Route::get('/addLibros', [LibrosController::class, 'addLibros'] );
Route::get('/cambiarLibros', [LibrosController::class, 'updateLibros'] );
Route::get('/deleteLibros', [LibrosController::class, 'deleteLibros'] );


//Llamar al formulario guardar libro
Route::get('/addBooksForm', [LibrosController::class, 'showFormularioAddLibros'] );

//Al dar click Boton guardar llama a este componente
Route::post('/addBooks', [LibrosController::class, 'addLibrosFormulario'])->name('addBooks');

//Mostrar libros
Route::get('/showBooks', [LibrosController::class, 'showAllLibros']);

//Eliminar un Libro
Route::get('/deleteBook/{id}', [LibrosController::class, 'deleteBook']);

//Actualizar Libro
Route::get('/updateBookForm/{id}', [LibrosController::class, 'updateBookForm'])->name('updateBook2');
Route::post('/updateBook/', [LibrosController::class, 'updateBook'])->name('updateBook');

//Detalles del libro
Route::get('/detailsBook/{id}', [LibrosController::class, 'detailsBook']);
Route::get('/details/', [LibrosController::class, 'details'])->name('details');

//Buscar un Libro
Route::post('/searchBooksGender', [LibrosController::class, 'searchBooksGender'])->name('searchBooksGender');
Route::post('/searchBooksTitle', [LibrosController::class, 'searchBooksTitle'])->name('searchBooksTitle');
Route::post('/searchBooksAuthor', [LibrosController::class, 'searchBooksAuthor'])->name('searchBooksAuthor');
Route::post('/searchBooksDate', [LibrosController::class, 'searchBooksDate'])->name('searchBooksDate');


//Prueba de alerta
Route::get('/alerta', [LibrosController::class, 'alertBad']);


//PRESTAMOS



//Llamar al formulario prestar libro
// Route::get('/addLoansForm', [LibrosController::class, 'showFormularioAddloans'] );

// //Al dar click Boton guardar llama a este componente
// Route::post('/addBooks', [LibrosController::class, 'addLibrosFormulario'])->name('addBooks');



Route::get('/showPrestamoForm/{id}', [ PrestamosController::class, 'showPrestamoFor' ]);



//Mostrar todos Prestamos
Route::get('/showPrestamos', [PrestamosController::class, 'showAllPrestamos']);


//Llamar al formulario Prestar libro
Route::get('/addPrestamoForm/{id}', [PrestamosController::class, 'showPrestamoForm'] );



//Al dar click Boton guardar llama a este componente
Route::post('/addPrestamo', [PrestamosController::class, 'addPrestamoFormulario'])->name('addPrestamo');


//Detalles del Prestamo
Route::get('/detailsPrestamo/{id}', [PrestamosController::class, 'detailsPrestamo']);

//Eliminar un Prestamo
Route::get('/deletePrestamo/{id}', [PrestamosController::class, 'deletePrestamo']);


//Llamar al formulario Devolver libro
Route::get('/returnPrestamoForm/{id}', [PrestamosController::class, 'returnPrestamoForm'] );


//Al dar click Boton para devolver Libro
Route::post('/retunDevolucion', [PrestamosController::class, 'retunDevolucion'])->name('retunDevolucion');


