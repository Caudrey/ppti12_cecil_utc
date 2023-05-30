<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $highlight = Post::orderBy('like', 'desc')->first();
        $latest = Post::orderBy('latestreview', 'desc')->limit(4)->get();
        $posts = Post::all();

        return view('home', compact('highlight', 'latest', 'posts'));
    }

    public function show($id){
        $post = Post::find($id);

        return view('detail', compact('post'));
    }
}
