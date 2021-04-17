<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutsController extends Controller
{
    public function index(){
        return view('layouts.index');
    }

    public function timeTable(){
        return view('layouts.timetable');
    }
    
    public function relatives(){
        return view('layouts.relatives');
    }

    public function service(){
        return view('layouts.service');
    }

    public function blog(){
        return view('layouts.blog');
    }

    public function blogDetails(){
        return view('layouts.blog-details');
    }
 
    public function application(){
        return view('layouts.application');
    }
}
