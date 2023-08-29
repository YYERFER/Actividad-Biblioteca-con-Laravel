@extends('appBiblioteca')

@section('title', 'Detalles Libros')

@section('content')

<form action="{{ route('details') }}" class="py-8 px-6 bg-white rounded-lg max-w-sm mx-auto" >

    <div class="container text-gray-700 text-xl font-serif" >
        <h1 class="flex justify-center">Detalles Libro</h1>

        <label class="grid mb-2" for="titulo">Título: {{ $libro->titulo }}</label>
        {{-- <input type="text" name="titulo" id="titulo" value="{{ $libro->titulo }}"> --}}

        <label class="grid mb-2" for="autor">Autor: {{ $libro->autor }}</label>
        {{-- <input type="text" name="autor" id="autor" value="{{ $libro->autor }}"> --}}

        <label class="grid mb-2" for="publicacion">Año de Publicación: {{ $libro->anio_publicacion }}</label>
        {{-- <input type="number" name="anio_publicacion" id="publicacion" value="{{ $libro->anio_publicacion }}" > --}}

        <label class="grid mb-2" for="genero">Genero: {{ $libro->genero }}</label>
        {{-- <input type="text" name="genero" id="genero" value="{{ $libro->genero }}"> --}}

        <label class="grid mb-2" for="">Disponible:
            @if ( $libro->disponible  === 'SI')
            SI
            @else
            NO
            @endif
        </label>

        <label class="grid mb-2" for="genero">Fecha de Ingreso: {{ $libro->updated_at }}</label>


        <div class="sub-container flex justify-center mt-6 ">
            <input class="mr-2  text-white bg-gray-800 no-underline border border-solid border-indigo-500 py-2.5 px-9 text-lg rounded-md ml-2 hover:bg-gray-600 hover:border-indigo-600 transition duration-500 ease-in-out hover:cursor-pointer font-serif " type="submit" value="Regresar">

        </div>
    </div>



</form>

@endsection

