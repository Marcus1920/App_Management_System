<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Activation;
use  Sentinel ;
use  App\User ;
class ActivationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Activate($email ,$activationCode)
    {

     $user  = User::whereEmail($email)->first() ;
      $SentinelUsers = Sentinel::findById($user->id) ;
      if (Activation::complete($SentinelUsers ,$activationCode)) {
        
        return   redirect ('login') ;
      }
      else {
        # code...
      }

    }


}
