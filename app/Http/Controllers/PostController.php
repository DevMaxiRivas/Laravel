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

        // Validaciones por defecto para los campos ingresados
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'category' => 'required'
        ]);

        // Forma larga
        // $post = new Post();
        // $post->title = $request->title;
        // $post->slug = $request->slug;
        // $post->content = $request->content;
        // $post->category = $request->category;
        // $post->save();

        // Formas cortas
        // Post::create([
        //     'title' => $request->title,
        //     'slug' => $request->slug,
        //     'content' => $request->content,
        //     'category' => $request->category
        // ]);

        // Forma corta utilizando propiedad fillable en el modelo
        Post::create($request->all());

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

        $request->validate([
            // Validacion de que el titulo tenga entre 5 y 255 caracteres
            'title' => ['required', 'min:5', 'max:255'],
            // Validacion de que el slug no exista en otro post y que sea unico
            // no comparando con el post que se quiere actualizar
            'slug' => "required|unique:post,slug,{$post->id}",
            'content' => 'required',
            'category' => 'required'
        ]);

        // Forma larga
        // $post->title = $request->title;
        // $post->slug = $request->slug;
        // $post->content = $request->content;
        // $post->category = $request->category;
        // $post->save();

        // Forma corta
        $post->update($request->all());

        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
