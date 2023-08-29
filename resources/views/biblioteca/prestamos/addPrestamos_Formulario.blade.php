
@extends('appBiblioteca')

@section('title','Añadir un Préstamo')

@section('content')


    <form action="{{ route('addPrestamo') }}"  method="POST" class="py-8 px-4 bg-white rounded-lg max-w-sm mx-auto">
        @csrf

        <div class="container text-gray-700 text-xl font-serif grid">

            <h1 class="flex justify-center">Prestar Libro</h1>

            <label class="grid mb-2" for="titulo">Título: {{ $libro->titulo }}</label>
            <label class="grid mb-2" for="autor">Autor: {{ $libro->autor }} </label>
            <label class="grid mb-2" for="titulo">Disponible: {{ $libro->disponible }} </label>

            <label class="grid mb-2" for="autor">fecha Préstamo</label>
            <input class="border border-gray-300 py-1 px-4 text-lg text-gray-700 rounded-md focus:border-indigo-500 outline-none focus:ring-1 focus:ring-indigo-500 font-serif" type="texto" name="fecha_prestamo" id="" value="{{ $fecha }} " readonly >


            <div class="sub-container flex justify-center mt-6 ">

                <input type="submit" value="Prestar" class="mr-2  text-white bg-gray-800 no-underline border border-solid border-indigo-500 py-2.5 px-9 text-lg rounded-md ml-2 hover:bg-gray-600 hover:border-indigo-600 transition duration-500 ease-in-out hover:cursor-pointer font-serif ">

                <a class=" text-white bg-gray-800 no-underline border border-solid border-indigo-500 py-2.5 px-2 rounded-md ml-2 hover:bg-gray-600 hover:border-indigo-600 transition duration-500 ease-in-out " href="http://127.0.0.1:8000/showBooks" ><button class="bg-transparent border-0 text-white text-lg hover:cursor-pointer font-serif" type="button">Mostrar Libros</button></a>

            </div>
        </div>

    </form>


    @endsection

