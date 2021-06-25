<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\DoctorArticle;


class DoctorArticleController extends Controller
{
    public function index()
    {
        $doctorarticles = DoctorArticle::orderBy('id','desc')->get();
        return view('doctorarticles.index')->with(['doctorarticles'=>$doctorarticles]);
    }
    public function view($id)
    {
        $doctorarticle=DoctorArticle::findOrFail($id);
        //dd($doctorarticle);
        return view('doctorarticles.view')->with(['doctorarticle'=>$doctorarticle]);
    }
    //
}
