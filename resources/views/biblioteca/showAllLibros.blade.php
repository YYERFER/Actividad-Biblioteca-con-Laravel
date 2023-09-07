
@extends('appBiblioteca')

@section('title', 'Mostrar Libros')

@section('content')
{{-- max-w-2xl --}}
<div class="py-8 px-4 bg-white rounded-lg  mx-auto text-xl font-serif">

    <h1 class="flex justify-center">Tipo de Busqueda</h1>

    <div class="flex justify-center mt-7 mb-7">
        <div class="flex justify-center mt-7 mb-7">

            <form action="{{ route('searchBooksGender') }}" method="POST" class="grid mb-3 mr-6">
                @csrf
                <label class="mb-2" for="" >Busqueda por Genero</label>
                <input class="border border-gray-300 py-1 px-4 mb-2 text-lg
                text-gray-700 rounded-md focus:border-gray-500 outline-none focus:ring-1 focus:ring-gray-500 font-serif" type="text" name="genero" id="" value="" >
                <input class=" text-white bg-gray-800 border border-solid border-indigo-500 py-2.5 text-lg rounded-md  hover:bg-gray-600 hover:border-indigo-600 transition duration-500 ease-in-out hover:cursor-pointer font-serif w-7/12 m-auto" type="submit" value="Buscar">

            </form>


            <form action="{{ route('searchBooksTitle') }}" method="POST" class="grid mb-3">
                @csrf

                <label class="mb-2" for="" >Busqueda por Título</label>
                <input class="border border-gray-300 py-1 px-4 mb-2 text-lg
                text-gray-700 rounded-md focus:border-gray-500 outline-none focus:ring-1 focus:ring-gray-500 font-serif" type="text" name="titulo" id="" value="">
                <input class=" text-white bg-gray-800 border border-solid border-indigo-500 py-2.5 text-lg rounded-md  hover:bg-gray-600 hover:border-indigo-600 transition duration-500 ease-in-out hover:cursor-pointer font-serif w-7/12 m-auto" type="submit" value="Buscar">

            </form>
        </div>

        <div class="flex justify-center mt-7 ml-10">
            <form action="{{ route('searchBooksDateInterval') }}" method="POST" class="grid mb-0">
                @csrf

                <label class="mb-2" for="" >Busqueda por Intervalo de Año</label>

                <label class="mb-2" for="" >Desde
                <input class="border border-gray-300 py-1 px-4 mb-2 text-lg
                text-gray-700 rounded-md focus:border-gray-500 outline-none focus:ring-1 focus:ring-gray-500 font-serif" type="number" name="desde" id="" >
                </label>

                <label class="mb-2" for="" >Hasta
                <input class="border border-gray-300 py-1 px-4 mb-2 text-lg
                text-gray-700 rounded-md focus:border-gray-500 outline-none focus:ring-1 focus:ring-gray-500 font-serif" type="number" name="hasta" id="" >
                </label>

                <input class=" text-white bg-gray-800  border border-solid border-indigo-500 py-2.5 text-lg rounded-md  hover:bg-gray-600  hover:border-indigo-600 transition duration-500 ease-in-out hover:cursor-pointer font-serif w-7/12 m-auto" type="submit" value="Buscar" >
            </form>

        </div>
    </div>

    <div class="flex justify-center  mb-7">
        <form action="{{ route('searchBooksAuthor') }}" method="POST" class="grid mb-3 mr-6">
            @csrf

            <label class="mb-2" for="" >Busqueda por Autor</label>
            <input class="border border-gray-300 py-1 px-4 mb-2 text-lg
            text-gray-700 rounded-md focus:border-gray-500 outline-none focus:ring-1 focus:ring-gray-500 font-serif" type="text" name="autor" id="" value="" >
            <input class=" text-white bg-gray-800  border border-solid border-indigo-500 py-2.5 text-lg rounded-md  hover:bg-gray-600  hover:border-indigo-600 transition duration-500 ease-in-out hover:cursor-pointer font-serif w-7/12 m-auto" type="submit" value="Buscar">
        </form>

        <form action="{{ route('searchBooksDate') }}" method="POST" class="grid mb-3">
            @csrf

            <label class="mb-2" for="" >Busqueda por Año</label>
            <input class="border border-gray-300 py-1 px-4 mb-2 text-lg
            text-gray-700 rounded-md focus:border-gray-500 outline-none focus:ring-1 focus:ring-gray-500 font-serif" type="number" name="anio" id="" >

            <input class=" text-white bg-gray-800  border border-solid border-indigo-500 py-2.5 text-lg rounded-md  hover:bg-gray-600  hover:border-indigo-600 transition duration-500 ease-in-out hover:cursor-pointer font-serif w-7/12 m-auto" type="submit" value="Buscar" >
        </form>


    </div>





@if ($libros->isEmpty())
    <p class="bg-red-500 py-6 text-2xl w-7/12 rounded-md mx-auto flex justify-center font-bold mt-10 text-gray-800">No hay Registro de Libros</p>

@else


    <div class="flex justify-center" >
        <table class="border-collapse   ">
            <thead>
                <tr class=" bg-slate-300 ">
                    <th class="border border-solid border-slate-300 px-4 py-2">titulo</th>
                    <th class="border border-solid border-slate-300 px-4 py-2">autor</th>
                    <th class="border border-solid border-slate-300 px-4 py-2">Año de Publicacion</th>
                    <th class="border border-solid border-slate-300 px-4 py-2">Genero</th>
                    <th class="border border-solid border-slate-300 px-4 py-2">Disponible</th>
                    <th class="border border-solid border-slate-300 px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($libros as $libro) --}}
                @each('components/tableRows', $libros ,'libro' )
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
@endif

@endsection

</div>

