<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Sentinel;


class LoginController extends Controller
{
    //

    protected $redirectTo = '/home';


    public function login()
    {


     return view('login.login');
    }


    public function postlogin(Request $request)
    {
        Sentinel::authenticate($request->all());



      if(Sentinel::check()==true)
      {
          $slug=Sentinel::getUser()->roles()->first()->slug;

          if($slug=='user')
          {

//              return redirect('home');
              return "user";

          }elseif($slug=='admin')
          {
//              return "admin";

              return redirect('home');
          }



        session()->put('username',$request->email);
        return redirect()->route('home');

      }else{
          return redirect()->back()->withErrors("Invalid username or password");
      }


    }

    public function logout()
    {

        Sentinel::logout();
        return redirect('/login');
    }


}
