<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\IterationService;
use App\Services\IterationSettingService;

class HomeController extends Controller
{
	
    protected $iteration;
    protected $setting;
    
    function __construct(IterationService $service, IterationSettingService $settingService){
	    
	    $this->iteration = $service;
	    $this->setting   = $settingService;
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->get('username')){
      $iterations = $this->iteration->getAll();
      return view('apps.listing', compact('iterations'));
	    }else{
   return redirect('../');		    
	    }

    }
}
