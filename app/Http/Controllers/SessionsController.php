<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //
    public function create(){
        return view('sessions.login');
    }
    public function store(){
        $remember_me  = ( !empty( $request->remember_me ) )? TRUE : FALSE;

        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        return redirect()->to('/');
    }
    public function destroy(){
        auth()->logout();
        
        return redirect()->to('/games');
    }
    public function forgotPassword(){
        return view("sessions.forgotPassword");
    }
}
