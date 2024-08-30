{{-- Utilizando el componente app-layout --}}
{{-- Como plantillas --}}
{{-- <x-app-layout>
    <div class="max-w-4xl mx-auto px-4">
        <x-alert2 type="danger" class="mb-4">
            <x-slot name="title">Titulo de la alerta</x-slot>
            Contenido de la alerta
        </x-alert2>
        <p>Hola mundo</p>
    </div>
</x-app-layout> --}}

{{-- Utilizando una plantilla --}}
@extends('layout.app')

{{-- Cuando se utiliza yyeld unicamente se tiene un contenido y se sobrescrib
    si se intenta crear otro con el mismo nombre
--}}

{{-- Utilizando un section para definir un titulo --}}
@section('title', 'Home')

{{-- Cuando se utiliza stack se pueden agregar multiples contenido --}}
@push('styles')
    <style>
        body {
            background-color: #ffff;
        }
    </style>
@endpush

@push('styles')
    <style>
        body {
            color: #ff0000;
        }
    </style>
@endpush



{{-- Utilizando un section para definir un contenido --}}
@section('content')
    <div class="max-w-4xl mx-auto px-4">
        <x-alert2 type="danger" class="mb-4">
            <x-slot name="title">Titulo de la alerta</x-slot>
            Contenido de la alerta
        </x-alert2>
        <p>Hola mundo</p>
    </div>

@endsection
