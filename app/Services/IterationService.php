<?php
namespace App\services;
use App\Iteration;

class IterationService
{
    public function getAll(){
         return $iteration = Iteration::with('settings')->get();
    }
    
    public function getIteration($id){
	    $iteration = Iteration::where('id','=',$id)
				    ->first();
	    return $iteration;
    }
    
    public function store(Array $array){
	    
	    $iteration 		 = new Iteration();
	    $iteration->name 	 = $array['name'];
	    $iteration->slug 	 = $array['name'];
	    $iteration->version  = $array['version'];
	    $iteration->installs = $array['installs'];
	    $iteration->save();  

	    return $iteration;
    }
    
    public function update($id, Array $array){
	    
	    $iteration = Iteration::where('id','=',$id)
				    ->first();
	  
	    $iteration->name   	 = $array['name'];
	    $iteration->slug 	 = $array['name'];
	    $iteration->version  = $array['version'];
	    $iteration->installs = $array['installs'];
	    $iteration->save();  
    }
    
    public function deleteIteration($id){
	    
	    $iteration = Iteration::where('id','=',$id)
				   ->delete(); 
    }
}