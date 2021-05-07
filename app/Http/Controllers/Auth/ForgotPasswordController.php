<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    /*
    |    This controller is responsible for handling password reset emails and
    |    includes a trait which assists in sending these notifications
    */

    use SendsPasswordResetEmails;
}

