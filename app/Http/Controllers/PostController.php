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

        $posts = Post::orderBy('id', 'desc')->paginate(10);

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
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->save();
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        // return view('show', ['post' => $post]);
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request /* $Formulario */, Post $post /* $id-post */)
    {
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->save();
        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
