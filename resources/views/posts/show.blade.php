@extends('layout.app')

@section('title', 'Posts')

@section('content')
    <a href="{{ route('posts.index') }}">Volver a Post</a>
    <h1>Titulo: {{ $post->title }}</h1>
    <p><b>Categoria:</b> {{ $post->category }}</p>
    <p>{{ $post->content }}</p>
    <p>{{ $post->created_at }}</p>

    {{-- Editar Post --}}
    <a href="{{ route('posts.edit', $post) }}">Editar Post</a>

    {{-- Eliminar Post --}}
    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar Post">
    </form>

@endsection
