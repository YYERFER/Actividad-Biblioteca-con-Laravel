@extends('appBiblioteca')

@section('title','Repuesta Formulario Añadir')

@section('content')

@if ($id>0)
    @component('components/alert', ['type' => 'success'])
        <p>Se Ha añadido el Libro correctamente</p>
    @endcomponent

@else
    @component('components/alert', ['type' => 'danger'])
    <p>Ha Ocurrido un Error al añadir</p>
    @endcomponent

@endif

 

@endsection
