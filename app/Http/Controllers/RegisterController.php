<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use Mail;

class RegisterController extends Controller
{
    //

  public function registrationForm()
{
    if(session()->get('username')) {
        return view('registration.registration');
    }else{
        return redirect('../');
    }

}

      public function logout()
      {


       Sentinel::logout();

          return   redirect('/');


      }

    public function registerUser(Request $request)
    {
      // Activate  the  use  using  the  email

         $User         = Sentinel::register($request->all());

        $Role          =Sentinel::findRoleBySlug($request['roles']);
        $Role->users()->attach($User);


         $activation   =  Activation::create($User);
         $this->Sendemail($User ,$activation->code ) ;

//       Sentinel::registerAndActivate($request->all());



    }

    private  function  Sendemail($user , $code)
    {

    Mail::send('email.activation',[
    'user'  => $user  ,
    'code'  => $code

    ] , function($message) use  ($user) {

      $message->to   ($user ->email) ;
      $message->subject  (" hello "  . $user ->first_name , "Activate  your  account . " );


      }) ;

    }


}
