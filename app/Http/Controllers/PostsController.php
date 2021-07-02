<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id','desc')->get();
        return view('posts.index')->with(['posts'=>$posts]);
    }
    public function view($id)
    {
        $post=Post::findOrFail($id);
        //dd($post);
        return view('posts.view')->with(['post'=>$post]);
    }
}
