<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Doctor;

class DoctorPageController extends Controller
{

  public function __construct()
  {
    //doctor must be authenticated
 //   $this->middleware('doctor.auth');
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
