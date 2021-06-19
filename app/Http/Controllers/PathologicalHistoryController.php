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

    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pathological.show');
    }


    public function create($id){
        return view('pathological.create', ["patient" => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            'smoke' => 'nullable|string',
            'alcohol' => 'nullable|string',
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
        return redirect()->view('pathological.show');
    }

    /**
     * Display the pathological history of patient with specific id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pathologicalHistory = PathologicalHistory::with(['patient'=>function($data){
            $data->select('first_name', 'age', 'id');
        }])->findOrFail($id);
        return view('pathological_history.show', compact('pathologicalHistory'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pathologicalHistory = PathologicalHistory::find($id);
        $pathologicalHistory->update($request->all());
        return $pathologicalHistory;
    }
}
