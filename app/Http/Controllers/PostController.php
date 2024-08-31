<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::select('id', 'title')->orderBy('id', 'desc')->get();

        // Metodo de paginacion por defecto 15 paginas
        // Muestra las primeros X registros
        // https://blog.test/posts
        // Muestra los segundos X registros
        // https://blog.test/posts/?page=2

        $posts = Post::select('id', 'title')->orderBy('id', 'desc')->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->save();
        return redirect('/posts');
    }

    public function show($post)
    {
        // Obtenemos registro
        $post = Post::find($post);
        // return view('show', ['post' => $post]);
        return view('posts.show', compact('post'));
    }

    public function edit($post)
    {
        $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request /* $Formulario */, $post /* $id-post */)
    {
        $post = Post::find($post);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->save();
        return redirect("/posts/{$post->id}");
    }

    public function destroy($post)
    {
        $post = Post::find($post);
        $post->delete();
        return redirect('/posts');
    }
}
