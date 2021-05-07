<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /*
    |   display available hospitals and their phones with id
    */
    public function show($id){
       $hospital = Hospital::with('hospitalPhones')->find($id);
       return $hospital;
    }

    /*
    |   show avilable hospitals in database in a table 
    */
    public function showHospitals(){
        $hospitals = DB::table('hospitals')->get();
        return view('layouts.hospital', ['hospitals'=>$hospitals]);
    }

    /*
    |   display the doctors in a given hospital
    */
    public function getHospitalDoctors(){
       $hospital = Hospital::with('hospitalDoctors')->find(1);
       return $hospital->hospitalDoctors;
       }

}
