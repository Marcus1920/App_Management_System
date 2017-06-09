<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iteration extends Model
{
    public function settings(){
	    return $this->hasone(IterationSetting::class);
    }
}
