@extends('layout.app')

@section('title', 'Posts')

@section('content')
    <a href="../posts">Volver a Post</a>
    <h1>Titulo: {{ $post->title }}</h1>
    <p><b>Categoria:</b> {{ $post->category }}</p>
    <p>{{ $post->content }}</p>
    <p>{{ $post->created_at }}</p>

@endsection
