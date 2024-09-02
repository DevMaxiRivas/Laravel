@extends('layout.app')

@section('title', 'Editar Post')

@section('content')
    <h1>Este es el formulario para cargar un nuevo post</h1>
    {{-- Listado de errores --}}
    @if ($errors->any())
        <h2>Hay errores</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('posts.update', $post) }}" method="POST">
        {{-- Tocken para proteger el formulario --}}
        @csrf
        {{-- input para indicar el metodo del formulario --}}
        @method('PUT')
        <label for="title">
            Titulo:
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
        </label>
        <br>
        <label for="slug">
            Slug:
            <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}">
        </label>
        <br>
        <label for="category">
            Categoría:
            <input type="text" name="category" id="category" value="{{ old('category', $post->category) }}">
        </label>
        <br>
        <label for="content">
            Contenido:
            <textarea name="content" id="content" cols="30" rows="10">{{ old('content', $post->content) }}</textarea>
        </label>
        <br>
        <input type="submit" value="Actualizar Post">
    </form>
@endsection
