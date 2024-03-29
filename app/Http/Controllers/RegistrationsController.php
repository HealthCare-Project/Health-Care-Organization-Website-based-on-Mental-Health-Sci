<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Mail;

class RegistrationsController extends Controller
{
    //

    public function create()
    {
        return view('patient-auth.registrations.create');
    }
    public function store(Request $request){
    $validated = $request->validate([
    	'first_name' => "required",
    	'last_name' => "required",
        'email' => 'required|unique:patients|max:255',
        'phone' => 'required|string|min:8|max:16',
        'height' => 'required|min:1:integer',
        'weight' => 'required|min:1:integer',
        'password' => "required|min:7|max:50|confirmed",
        'age' => "required",
    ]);

    $user = Patient::create([
        'first_name' => request('first_name'),
        'email' => request('email'),
        'last_name' => request('last_name'),
        'phone' => request("phone"),
        'height' => request("height"),
        "weight" => request("weight"),
        'age' => request("age"),
        'password' => request("password"),
        'verification_code' => sha1(time())
    ]);

    auth()->login($user);

    EmailController::sendSignUpEmail($user->first_name, $user->last_name, $user->email, 
        $user->verification_code);
    return redirect()->to('/')->with('success','Please check your email for verification');
    // The blog post is valid...
	}
    public function verifyUser(Request $request){
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $user = Patient::where(["verification_code" => $verification_code])->first();
        if($user != null){
            $user->is_verified = 1;
            $user->save();
        };
    return redirect()->to('/')->with('success','Verification compelete!');

    }
}
