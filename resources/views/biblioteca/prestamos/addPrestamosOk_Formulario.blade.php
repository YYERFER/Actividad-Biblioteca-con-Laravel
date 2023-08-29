@extends('appBiblioteca')

@section('title','Repuesta Formulario Añadir')

@section('content')

@if ($libro->disponible == 'SI')
    @component('components/alert', ['type' => 'success'])
        <p>Libro Prestado Correctamente</p>
    @endcomponent

@else
    @component('components/alert', ['type' => 'danger'])
    <p>lo siento, el Libro no se encuentra disponible ...! </p>
    @endcomponent

@endif

@endsection
