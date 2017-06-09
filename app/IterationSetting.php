<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IterationSetting extends Model
{
    public function iteration(){
	    return $this->belongTo(Iteration::class);
    }
}
