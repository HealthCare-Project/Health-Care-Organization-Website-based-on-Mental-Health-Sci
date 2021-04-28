<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Models\User;

use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


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
    public function RestorePassword(Request $request){
        $user = User::where('email', request("email"))->get()->first();
        if (!$user) {
            return redirect()->back()->withErrors(['email' => trans('User does not exist')]);
        }
        EmailController::ResetPassword($request->email);
    }


    public function showPasswordResetForm($token){
             $tokenData = DB::table('password_resets')
             ->where('token', $token)->first();

             if ( !$tokenData ) return redirect()->to('/'); //redirect them anywhere you want if the token does not exist.
             return view('sessions.password_reset')->with("token", $tokenData->token);
    }

    public function PasswordReset(Request $request, $token){

     $password = $request->password;
     $tokenData = DB::table('password_resets')
     ->where('token', $token)->first();

     $user = User::where('email', $tokenData->email)->first();
     if ( !$user ) return redirect()->to('home'); //or wherever you want

     $user->password = $password;
     $user->save(); //or $user->save();

     //do we log the user directly or let them login and try their password for the first time ? if yes 

     Auth::login($user);
    // If the user shouldn't reuse the token later, delete the token 
    DB::table('password_resets')->where('email', $user->email)->delete();

    //redirect where we want according to whether they are logged in or not.
    redirect()->to('/');
 }

}
