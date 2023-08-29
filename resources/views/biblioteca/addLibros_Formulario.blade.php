
@extends('appBiblioteca')

@section('title','Añadir un Nuevo Libro')

@section('content')


    <form action="{{ route('addBooks') }}" method="POST" class="py-8 px-6 bg-white rounded-lg max-w-sm mx-auto">
        @csrf

        <div class="container text-gray-700 text-xl font-serif">

            <h1 class="flex justify-center">Guardar Libros</h1>

            <div class="">
                <div class="grid mb-3">
                    <label for="" class="mb-2" >Ingrese Título</label>
                    <input class="border border-gray-300 py-1 px-4 text-lg
                    text-gray-700 rounded-md focus:border-gray-500 outline-none focus:ring-1 focus:ring-gray-500 font-serif" type="text" name="titulo" id="" >
                </div>

                <div class="grid mb-3">
                    <label for="" class="mb-2" >Ingrese Autor</label>
                    <input class="border border-gray-300 py-1 px-4 text-lg  text-gray-700 rounded-md focus:border-gray-500 outline-none focus:ring-1 focus:ring-gray-500 font-serif" type="text"  name="autor" id="" >
                </div>

                <div class="grid mb-3">
                    <label for="" class="mb-2" >Ingrese Año de Pubicación</label>
                    <input class="border border-gray-300 py-1 px-4 text-lg  text-gray-700 rounded-md focus:border-gray-500 outline-none focus:ring-1 focus:ring-gray-500 font-serif" type="number" name="anio_publicacion" id="" >
                </div>

                <div class="grid mb-3">
                    <label for="" class="mb-2" >Ingrese Género</label>
                    <input class="border border-gray-300 py-1 px-4 text-lg  text-gray-700 rounded-md focus:border-gray-500 outline-none focus:ring-1 focus:ring-gray-500 font-serif" type="text" name="genero" id="">
                 </div>

                <div  class="grid ">
                    <label for="" class="mb-2" >Disponibilidad Para Préstamo</label>
                    <select class="border border-gray-300 py-1 px-4 text-lg  text-gray-700 rounded-md focus:border-gray-500 outline-none focus:ring-1 focus:ring-gray-500 font-serif" name="disponible">
                        <option class="hover:bg-indigo-400" value='SI' selected>Si</option>
                        <option value='NO'>No</option>
                    </select>
                </div>

            </div>

            <div class="sub-container flex justify-center mt-6 ">
                <input class="mr-2  text-white bg-gray-800 no-underline border border-solid border-indigo-500 py-2.5 px-9 text-lg rounded-md ml-2 hover:bg-gray-600 hover:border-indigo-600 transition duration-500 ease-in-out hover:cursor-pointer font-serif " href="http://127.0.0.1:8000/showBooks" type="submit" value="Guardar">

                <a class=" text-white bg-gray-800 no-underline border border-solid border-indigo-500 py-2.5 px-2 rounded-md ml-2 hover:bg-gray-600 hover:border-indigo-600 transition duration-500 ease-in-out " href="http://127.0.0.1:8000/showBooks" ><button class="bg-transparent border-0 text-white text-lg hover:cursor-pointer font-serif" type="button">Mostrar Libros</button></a>
                {{-- <input type="reset" value="Mostrar Libros"> --}}
            </div>
        </div>

    </form>


    @endsection

