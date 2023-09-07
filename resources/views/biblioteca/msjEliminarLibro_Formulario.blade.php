@extends('appBiblioteca')

@section('title','Devolución de Libro')

@section('content')

@if ($libro->disponible == 'SI')
    @component('components/alert', ['type' => 'success'])
        <p class="bg-red-500 py-8 text-2xl w-7/12 rounded-md mx-auto flex justify-center font-bold mt-60 text-gray-800">El libro se Encuentra Disponible</p>
    @endcomponent

@else
    @component('components/alert', ['type' => 'danger'])
    <p class="bg-red-500 py-8 text-2xl w-7/12 rounded-md mx-auto flex justify-center font-bold mt-60 text-gray-800">lo siento no se puede Eliminar, el Libro se encuentra Prestado ... ! </p>
    @endcomponent

@endif

@endsection
