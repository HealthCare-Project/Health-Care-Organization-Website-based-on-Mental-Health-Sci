<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Post;


class DoctorPageController extends Controller
{

  public function __construct()
  {
    //doctor must be authenticated
    //$this->middleware('doctor.auth');
  }

  /*
  | Show the doctor page  
  */
  public function index(){

    return view('layouts.doctor');

  }


    public function show($id){
        return view('doctor-profile.profile', [
            'doctor' => Doctor::findOrFail($id)
        ]);
    }
  
}
