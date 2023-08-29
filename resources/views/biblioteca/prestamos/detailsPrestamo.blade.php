@extends('appBiblioteca')

@section('title', 'Detalles Prestamo')

@section('content')

<form action="" class="py-8 px-6 bg-white rounded-lg max-w-sm mx-auto">

    <div class="container text-gray-700 text-xl font-serif" >
        <h1 class="flex justify-center">Detalles Prestamo</h1>

        <label class="grid mb-2" for="titulo">Título: {{ $prestamos->libros->titulo }}</label>


        <label class="grid mb-2" for="autor">Autor: {{ $prestamos->libros->autor }}</label>


        <label class="grid mb-2" for="genero">Genero: {{ $prestamos->libros->genero }}</label>

        <label class="grid mb-2" for="publicacion">Fecha de Préstamo: {{ $prestamos->fecha_prestamo }}</label>
        <label class="grid mb-2" for="publicacion">Fecha de Devolución: {{ $prestamos->fecha_devolucion }}</label>


        <label class="grid mb-2" for="">Disponible:
            @if ( $prestamos->libros->disponible  === 'SI')
            SI
            @else
            NO
            @endif
        </label>


        <div class="sub-container flex justify-center mt-6 ">

            <a class=" text-white bg-gray-800 no-underline border border-solid border-indigo-500 py-2.5 px-2 rounded-md ml-2 hover:bg-gray-600 hover:border-indigo-600 transition duration-500 ease-in-out " href="http://127.0.0.1:8000/showPrestamos" ><button class="bg-transparent border-0 text-white text-lg hover:cursor-pointer font-serif" type="button">Regresar</button></a>
        </div>

    </div>



</form>

@endsection

