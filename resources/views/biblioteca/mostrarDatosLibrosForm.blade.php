@extends('appBiblioteca')

@section('title', 'Actualizar Libros')

@section('content')

    <form action="{{ route('updateBook') }}" method="POST" class="py-8 px-6 bg-white rounded-lg max-w-sm mx-auto" >
        @csrf



        <div class="container text-gray-700 text-xl font-serif" >

            <h1 class="flex justify-center">Modificar Libros</h1>

            <div class="grid mb-3">
                <label class="mb-2"  for="titulo">Título </label>
                <input type="text" name="titulo" id="titulo" value="{{ $libro->titulo }}" class="border border-gray-300 py-1 px-4 text-lg text-gray-700 rounded-md focus:border-gray-500 outline-none focus:ring-1 focus:ring-gray-500 font-serif">
            </div>

            <div class="grid mb-3">
                <label class="mb-2"  for="autor">Autor</label>
                <input type="text" name="autor" id="autor" value="{{ $libro->autor }}" class="border border-gray-300 py-1 px-4 text-lg text-gray-700 rounded-md focus:border-gray-500 outline-none focus:ring-1 focus:ring-gray-500 font-serif">
            </div>

            <div class="grid mb-3">
                <label class="mb-2"  for="publicacion">Año de Publicación</label>
                <input type="number" name="anio_publicacion" id="publicacion" value="{{ $libro->anio_publicacion }}" class="border border-gray-300 py-1 px-4 text-lg text-gray-700 rounded-md focus:border-gray-500 outline-none focus:ring-1 focus:ring-gray-500 font-serif">
            </div class="grid mb-3">

            <div class="grid mb-3">
                <label class="mb-2"  for="genero">Genero</label>
                <input type="text" name="genero" id="genero" value="{{ $libro->genero }}" class="border border-gray-300 py-1 px-4 text-lg text-gray-700 rounded-md focus:border-gray-500 outline-none focus:ring-1 focus:ring-gray-500 font-serif">
            </div>

            <div class="grid mb-3">
            <label class="mb-2"  for="">Actualmente el Libro "
                @if ( $libro->disponible  === 'SI')
                SI
                @else
                NO
                @endif

                " se encuentra en disponibilidad </label>
            </div>

            {{-- <label for="" >Cambio la Disponibilidad a:</label>
            <select name="disponible">
                <option value='SI' selected>Si</option>
                <option value='NO'>No</option>
            </select> --}}


            <div class="sub-container flex justify-center mt-6 ">
                <input class="mr-2  text-white bg-gray-800 no-underline border border-solid border-indigo-500 py-2.5 px-9 text-lg rounded-md ml-2 hover:bg-gray-600 hover:border-indigo-600 transition duration-500 ease-in-out hover:cursor-pointer font-serif " type="submit" value="Actualizar">

                <a class=" text-white bg-gray-800 no-underline border border-solid border-indigo-500 py-2.5 px-2 rounded-md ml-2 hover:bg-gray-600 hover:border-indigo-600 transition duration-500 ease-in-out " href="http://127.0.0.1:8000/showBooks" ><button class="bg-transparent border-0 text-white text-lg hover:cursor-pointer font-serif" type="button">Mostrar Libros</button></a>

            </div>
        </div>



    </form>

@endsection
