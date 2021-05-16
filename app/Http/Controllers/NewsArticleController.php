<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\NewsArticle;


class NewsArticleController extends Controller
{
    public function index()
    {
        $newsarticles = NewsArticle::all();
        return view('newsarticles.index')->with(['newsarticles'=>$newsarticles]);
    }
    public function view($id)
    {
        $newsarticle=NewsArticle::findOrFail($id);
        //dd($newsarticle);
        return view('newsarticles.view')->with(['newsarticle'=>$newsarticle]);
    }
    //
}
