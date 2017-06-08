<?php
namespace App\services;
use App\IterationSetting;

class IterationSettingService
{
    public function getAll(){
      return $settings = IterationSetting::all();
    }
    
    public function getSetting($id){
	    $settings = IterationSetting::where('id','=',$id)
				    ->get();
	    return $settings;
    }
    
    public function store(Array $array){
	    
	    $settings 		         = new IterationSetting();
	    $settings->iteration_id 	 = $array['iteration_id'];
	    $settings->endpoint 	 = $array['endpoint'];
	    $settings->bg_image  	 = $array['bg_image'];
	    $settings->logo 		 = $array['logo'];
	    $settings->save(); 
    }
    
}