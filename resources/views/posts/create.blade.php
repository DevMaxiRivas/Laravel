@extends('layout.app')

@section('title', 'Create Post')

@section('content')
    <h1>Este es el formulario para cargar un nuevo post</h1>

    {{-- Listado de errores --}}
    {{-- @if ($errors->any())
        <h2>Hay errores</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif --}}

    <form action="/posts" method="POST">
        @csrf
        <label for="title">
            Titulo:
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </label>
        <br>
        <label for="slug">
            Slug:
            <input type="text" name="slug" id="slug" value="{{ old('slug') }}">
            @error('slug')
                <p>{{ $message }}</p>
            @enderror
        </label>
        <br>
        <label for="category">
            Categoría:
            <input type="text" name="category" id="category" value="{{ old('category') }}">
            @error('category')
                <p>{{ $message }}</p>
            @enderror
        </label>
        <br>
        <label for="content">
            Contenido:
            <textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
            @error('content')
                <p>{{ $message }}</p>
            @enderror
        </label>
        <br>
        <input type="submit" value="Enviar">
    </form>
@endsection
