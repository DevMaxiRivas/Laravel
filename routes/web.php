<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index'])
    ->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])
    ->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show');

Route::get('posts/{post}/edit', [PostController::class, 'edit'])
    ->name('posts.edit');
Route::put('posts/{post}', [PostController::class, 'update'])
    ->name('posts.update');
Route::delete('posts/{post}', [PostController::class, 'destroy'])
    ->name('posts.destroy');

Route::get('/prueba', function () {
    //    Crear un nuevo Post
    // $post = new Post;
    // $post->title =
    //     'Titulo 4';
    // $post->content = 'Contenido de prueba4';
    // $post->category = 'Categoria de Prueba4';
    // $post->save();
    // return $post;

    // Actualizar un Post
    // Por clave primaria

    // $post = Post::find(1);
    // El primero por filtro
    // $post = Post::where('title', 'Prueba')->first();
    // $post->category = 'Desarrollo Web';
    // $post->save();

    // Traer todos los posts
    // $posts = Post::all();

    // Traer posts con filtros ordenado segun el id
    // $posts = Post::where('id', '<=', '2')->orderBy('id', 'desc')->get();

    // Solamente ciertas columnas
    // $posts = Post::select('id', 'title')->orderBy('id', 'desc')->get();

    // Traer 2 posts
    // $posts = Post::take(2)->get();

    // Eliminar un post
    // $post = Post::find(1);
    // $post->delete();

    // return $posts;

    $post = Post::find(4);
    return $post->published_at->diffForHumans();
});
