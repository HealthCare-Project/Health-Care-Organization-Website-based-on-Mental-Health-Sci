<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use Illuminate\Http\Request;

class ConfirmPasswordController extends Controller
{
    /*
    |    This controller is responsible for handling password confirmations and
    |    uses a simple trait to include the behavior
    */
    
    use ConfirmsPasswords;

    public function __construct()
    {
        $this->middleware('auth');
    }
}
