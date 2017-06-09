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

      public function logout()
      {


       Sentinel::logout(null, true);

          return   redirect('/');


      }

    public function registerUser(Request $request)
    {
      // Activate  the  use  using  the  email

      /*   $User         = Sentinel::register(Input::all());
         $activation   =  Activation::create($User);
         $this->Sendemai($User ,$activation->code ) ;
         */
       Sentinel::registerAndActivate($request->all());



    }

    private  function  Sendemail($user , $code)
    {

    Mail::send('email.activation',[
    'user'  => $user  ,
    'code'  => $code


      ] , function($message) use  ($user) {

      $message->to   ($user ->email) ;
      $message->subject  (" hello "  . $user ->first_name ,

    "Activate  your  account . " ) ;

      }) ;

    }


}
