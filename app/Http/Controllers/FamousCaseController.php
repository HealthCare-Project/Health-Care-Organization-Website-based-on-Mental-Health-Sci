<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\FamousCase;


class FamousCaseController extends Controller
{
    public function index()
    {
        $famouscases = FamousCase::all();
        return view('famouscases.index')->with(['famouscases'=>$famouscases]);
    }
    public function view($id)
    {
        $famouscase=FamousCase::findOrFail($id);
        //dd($famouscase);
        return view('famouscases.view')->with(['famouscase'=>$famouscase]);
    }
    //
}
