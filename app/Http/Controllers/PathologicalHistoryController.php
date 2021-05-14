<?php

namespace App\Http\Controllers;

use App\Models\PathologicalHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PathologicalHistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:doctor')->only("index", "show");
        $this->middleware('auth:patient')->only("create");
    }

    public function index(){
#        return view('pathological_history.create');
    }


    public function create($id){
        return view('pathological.create', ["patient" => $id]);
    }
    public function store(Request $request){
        
        /*
        |    Validate the form submission
        */
        $request->validate([
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'blood_type' => 'required|string',
            'diabetic' => 'required',
            'allergy_to_medical' => 'required',
            'allergy_to_medical_description' => 'nullable|exclude_unless:allergy_to_medical,true|required|string',
            'description' => 'nullable|string',
            'Lsugar_test' => 'required|string',
            'blood_pressure_sys' => 'required|numeric',
            'blood_pressure_dyas' => 'required|numeric',
            'smoke' => 'nullable',
            'alcohol' => 'nullable',
            'surgical_history' => 'nullable|string',
        ]);

        /*
        |    Create and save a pathological history to the database
        */
        $pathologicalHistory = PathologicalHistory::create([
            'weight' => request('weight'),
            'height' => request('height'),
            'blood_type' => request('blood_type'),
            'diabetic' => request('diabetic'),
            'allergy_to_medical' => request('allergy_to_medical'),
            'allergy_to_medical_description' => request('allergy_to_medical_description'),
            'description' => request('description'),
            'Lsugar_test' => request('Lsugar_test'),
            'blood_pressure_sys' => request('blood_pressure_sys'),
            'blood_pressure_dyas' => request('blood_pressure_dyas'),
            'smoke' => request('smoke'),
            'alcohol' => request('alcohol'),
            'surgical_history' => request('surgical_history'),
            'patient_id' => auth()->guard('patient')->user()->id,
        ]);

        /*
        |    Redirect the patient to the show pathological history route
        */
        return redirect()->view('pathological_history.show');
    }


    public function show(){

        $data = DB::table('pathological_histories')->get();
        return view('pathological_history.show', ['pathological_histories'=>$data]);
        
    }

    public function update(Request $request, $id)
    {
        $pathologicalHistory = PathologicalHistory::find($id);
        $pathologicalHistory->update($request->all());
        return $pathologicalHistory;
    }
}
