<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\RelativesArticle;


class RelativesArticleController extends Controller
{
    public function index()
    {
        $relativesarticles = RelativesArticle::orderBy('id','desc')->get();
        return view('relativesarticles.index')->with(['relativesarticles'=>$relativesarticles]);
    }
    public function view($id)
    {
        $relativesarticle=RelativesArticle::findOrFail($id);
        //dd($relativesarticle);
        return view('relativesarticles.view')->with(['relativesarticle'=>$relativesarticle]);
    }
    //
}
