@extends('layout.app')

@section('title', 'Posts')

@section('content')

    <h1>Aqui se mostraran los posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li><a href="posts/{{ $post->id }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>

@endsection
