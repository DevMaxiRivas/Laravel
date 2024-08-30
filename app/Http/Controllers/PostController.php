<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::select('id', 'title')->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }


    public function show($post)
    {
        // Obtenemos registro
        $post = Post::find($post);
        // return view('show', ['post' => $post]);
        return view('posts.show', compact('post'));
    }
}
