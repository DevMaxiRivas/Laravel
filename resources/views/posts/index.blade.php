@extends('layout.app')

@section('title', 'Posts')

@section('content')

    <h1>Aqui se mostraran los posts</h1>
    <a href="{{ route('posts.create') }}">Crear nuevo post</a>
    <ul>
        @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>

    {{ $posts->links() }}

@endsection
