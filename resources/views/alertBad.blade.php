@extends('appBiblioteca')

@section('title', 'Alerta de Prueba')

@section('content')
    {{-- <x-alert type='danger'>
        <p>Ha ocurrido un Error</p>
    </x-alert> --}}
    @component('components/alert', ['type' => 'danger'])
        <p>Ha ocurrido un error</p>
    @endcomponent

@endsection
