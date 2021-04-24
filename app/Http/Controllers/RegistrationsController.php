<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegistrationsController extends Controller
{
    //

    public function create()
    {
        return view('registrations.create');
    }

    public function store(Request $request){
    $validated = $request->validate([
    	'first_name' => "required",
    	'last_name' => "required",
        'email' => 'required|unique:users|max:255',
        'phone' => 'required|string|min:8|max:16',
        'height' => 'required|min:1:integer',
        'weight' => 'required|min:1:integer',
        'password' => "required|min:7|max:50|confirmed",
        'age' => "required",
    ]);

    $user = User::create([
        'first_name' => request('first_name'),
        'email' => request('email'),
        'last_name' => request('last_name'),
        'phone' => request("phone"),
        'height' => request("height"),
        "weight" => request("weight"),
        'age' => request("age"),
        'password' => request("password"),
    ]);

    auth()->login($user);
    return redirect()->to('/games');
    // The blog post is valid...
	}
}
