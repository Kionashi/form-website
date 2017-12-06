<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasecoldaYearValue extends Model
{
    protected $table='fasecolda_years_values';
    
    public function fasecolda() {
    	
    	return $this->belongsTo('App\Fasecolda');
    }
    
}
