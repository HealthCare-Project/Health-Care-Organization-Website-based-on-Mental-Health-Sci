<?php

namespace App\Http\Controllers\appointment;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Governorate;
use App\Models\Speciality;
use App\Models\City;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all()->toJson();
        $governorates = Governorate::all()->toJson();
        $specialities = Speciality::all()->toJson();

        return view('appointment.search', [
            'cities' => $cities, 
            'governorates' => $governorates, 
            'specialities' => $specialities
        ]);
    }

    //get doctors info
    public function getDoctors(Request $request)
    {

        $doctors = Doctor::with('speciality');
        if ($request->has('city_id')) {
            if ($request->get('city_id') != null)
                $doctors = $doctors->where('city_id', $request->get('city_id'));
        }

        if ($request->has('governorate_id')) {
            if ($request->get('governorate_id') != null)
                $doctors = $doctors->where('governorate_id', $request->get('governorate_id'));
        }


        if ($request->has('speciality_id')) {
            if ($request->get('speciality_id') != null)
                $doctors = $doctors->where('speciality_id', $request->get('speciality_id'));
        }

        return response()->json($doctors->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
