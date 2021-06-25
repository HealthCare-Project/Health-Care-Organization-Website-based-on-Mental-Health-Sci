<?php

namespace App\Http\Controllers\doctor;

use App\Models\Doctor;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doctor-auth.registrations.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        |    Validate the form submission
        */
        $request->validate([
            'first_name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'age' => 'required|max:3',
            'gender' => 'required|',
            'email' => 'required|email|unique:doctors|max:255',
            'password' => 'required|min:8|max:50|confirmed',
            'phone' => 'required|string|min:8|max:16',
            'address' => 'required',
            'city' => 'required',
            'governorate' => 'required',
            'specialty' => 'required',
            'doctor_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'availability' => 'required'
        ]);

        /*
        |    Use the saveImage function
        */
        $image = $this->saveImage($request->doctor_image, 'doctor_images');

        /*
        |    Create and save a doctor to the database
        */
        $doctor = Doctor::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'age' => request('age'),
            'gender' => request('gender'),
            'email' => request('email'),
            'password' => Hash::make($request->password),
            'phone' => request('phone'),
            'address' => request('address'),
            'city' => request('city'),
            'governorate' => request('governorate'),
            'specialty' => request('specialty'),
            'doctor_image' => $image,
            'availability' => request("availability"),
        ]);

        Auth::login($doctor);

        return redirect()->to('doctor/login');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Doctor::find($id);
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
        $doctor = Doctor::find($id);
        $doctor->update($request->all());
        return $doctor;
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return Doctor::where('first_name', 'like', '%'.$name.'%')->get();
    }

    /*
    |    function to save image in database with its custom name and folder
    */
    public function saveImage($image, $path){
        $newImageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path($path), $newImageName);
         return $newImageName;
    }
}
 