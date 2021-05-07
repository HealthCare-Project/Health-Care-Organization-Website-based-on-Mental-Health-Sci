<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorPageController extends Controller
{

  public function __construct()
  {
    //doctor must be authenticated
    $this->middleware('doctor.auth');
  }

  /*
  | Show the doctor page  
  */
  public function index(){

    return view('layouts.doctor');

  }
  
}
