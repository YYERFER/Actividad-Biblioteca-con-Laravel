@extends('appBiblioteca')

@section('title','Repuesta Formulario Añadir')

@section('content')

@if ($id>0)
    @component('components/alert', ['type' => 'success'])
        <p class="bg-green-500 py-6 text-2xl w-7/12 rounded-md mx-auto flex justify-center font-bold mt-10 text-gray-800">Se Ha añadido el Libro correctamente</p>
    @endcomponent

@else
    @component('components/alert', ['type' => 'danger'])
    <p class="bg-red-500 py-6 text-2xl w-7/12 rounded-md mx-auto flex justify-center font-bold mt-10 text-gray-800">Ha Ocurrido un Error al añadir</p>
    @endcomponent

@endif



@endsection
