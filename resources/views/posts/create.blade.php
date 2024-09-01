@extends('layout.app')

@section('title', 'Create Post')

@section('content')
    <h1>Este es el formulario para cargar un nuevo post</h1>
    <form action="/posts" method="POST">
        @csrf
        <label for="title">
            Titulo:
            <input type="text" name="title" id="title">
        </label>
        <br>
        <label for="slug">
            Slug:
            <input type="text" name="slug" id="slug">
        </label>
        <br>
        <label for="category">
            Categoría:
            <input type="text" name="category" id="category">
        </label>
        <br>
        <label for="content">
            Contenido:
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </label>
        <br>
        <input type="submit" value="Enviar">
    </form>
@endsection
