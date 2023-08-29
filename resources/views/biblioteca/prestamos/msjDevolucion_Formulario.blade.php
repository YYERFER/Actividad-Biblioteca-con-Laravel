@extends('appBiblioteca')

@section('title','Devolución de Libro')

@section('content')

@if ($prestamos->libros->disponible == 'SI')
    @component('components/alert', ['type' => 'success'])
        <p>El libro se Encuentra Disponible</p>
    @endcomponent

@else
    @component('components/alert', ['type' => 'danger'])
    <p >lo siento no se puede Eliminar, el Libro se encuentra Prestado ... !</p>
    @endcomponent

@endif

@endsection
