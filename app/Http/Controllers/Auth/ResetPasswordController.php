<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /*
    |    This controller is responsible for handling password reset requests
    |    and uses a simple trait to include this behavior
    */
    
    use ResetsPasswords;
}
