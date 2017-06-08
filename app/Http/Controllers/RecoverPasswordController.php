<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RecoverPasswordController extends Controller
{

    public function index()
    {
        return view('forgotpassword.index');
    }

    public function reset(Request $request)
    {
        if ($request->email != "") {
            if (User::where('email', $request->email)->exists()) {
                return redirect()->back()->withErrors(" ): check your email address ");
            } else {
           return redirect()->back()->withErrors("This email doesn't registered with us");
            }
        } else {
        return redirect()->back()->withErrors("Write your email address");
        }
    }

}