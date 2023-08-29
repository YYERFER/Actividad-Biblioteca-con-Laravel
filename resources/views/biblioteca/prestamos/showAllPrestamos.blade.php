
@extends('appBiblioteca')

@section('title', 'Mostrar Libros')

@section('content')

<div class="mx-auto" >




@if ($prestamos->isEmpty())
    <p class="bg-orange-500 mx-auto  py-8 text-2xl w-7/12 rounded-md flex justify-center font-bold mt-60 text-gray-800">No hay Registro de Prestamos</p>

@else


    <div class="py-8 px-4 bg-white rounded-lg text-xl font-serif flex justify-center" >
        <table class="border-collapse ">
            <thead>
                <tr class=" bg-slate-300 ">
                    <th class="border border-solid border-slate-300 px-4 py-2">titulo</th>
                    <th class="border border-solid border-slate-300 px-4 py-2">autor</th>
                    <th class="border border-solid border-slate-300 px-4 py-2">Fecha Prestamo</th>
                    <th class="border border-solid border-slate-300 px-4 py-2">Fecha Devolución</th>
                    <th class="border border-solid border-slate-300 px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($libros as $libro) --}}
                @each('components/tableRowsPrestamos', $prestamos ,'prestamos' )
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
@endif

@endsection


