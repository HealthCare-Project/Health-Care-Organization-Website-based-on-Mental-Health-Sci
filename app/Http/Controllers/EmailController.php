<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\VerificationEmail;
use App\Mail\ForgotPassword;
use App\Mail\NewReply;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;


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


    public static function ResetPassword($email){
        DB::table('patient_password_resets')->insert([
            'email' => $email,
            'token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);
        //Get the token just created above
        $tokenData = DB::table('patient_password_resets')->where('email', $email)->first();
        Mail::to($tokenData->email)->send(new ForgotPassword($tokenData->token));
    }

    public static function NewReplyEmail($author, $email, $thread){
        $data = [
            "email" => $email,
            "author" => $author,
            "thread" => $thread,
        ];
        Mail::to($email)->send(new NewReply($data));
    }
}
