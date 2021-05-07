<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\DoctorAuthenticate as Middleware;


class DoctorAuthenticate 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //return to login page if doctor is not logged in
        if (! $request->expectsJson()) {
            return redirect()->to('/doctor-login');
        }
        else
            return $next($request);
    }
}
