<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasecolda extends Model
{
    protected $table='fasecolda';
    
    public function cylinder() {
    	return $this->belongsTo('App\Cylinder');
    }
    public function fuelType() {
    	return $this->belongsTo('App\FuelType');
    }
  
}
