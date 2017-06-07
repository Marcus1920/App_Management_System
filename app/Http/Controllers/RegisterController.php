<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class RegisterController extends Controller
{
    //

    public function registrationForm()
{
    return view('registration.registration');

}

    public function registerUser(Request $request)
    {
//    dd($request->all());
       Sentinel::registerAndActivate($request->all());




    }
}
