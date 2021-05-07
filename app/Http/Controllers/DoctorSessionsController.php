<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorSessionsController extends Controller
{
    /*
    |    offer a login form
    */
    public function create()
    {
        return view('sessions.doctor-login');
    }

    /*
    |    log an existing user in
    */
    public function store()
    {
        if (Auth::guard('doctor')->Auth::attempt(request(['email', 'password']) == false)){
             return redirect()->back()->withErrors([
                 'message' => 'The email or password is incorrect, please try again'
             ]);
        }
        return redirect()->to('/');
    }

    /*
    |    log a user out of the application
    */
    public function destroy()
    {
    
        Auth::logout();;

        return redirect()->to('/');
    }
}
