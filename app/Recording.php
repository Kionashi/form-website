<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recording extends Model
{
    protected $table='recording';
    
    public function vehicleClass(){
    	return $this->belongsTo('App\VehicleClass','class_id');
    }
    
    public function inspector(){
    	return $this->belongsTo('App\User','inspector_id');
    }
}
