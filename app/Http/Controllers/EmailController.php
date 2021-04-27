<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\VerificationEmail;

class EmailController extends Controller
{

	public static function sendSignUpEmail($first_name, $last_name, $email, $verification_code){
        $data = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'verification_code' => $verification_code
            
        ];
        Mail::to($email)->send(new VerificationEmail($data));
    }


}
