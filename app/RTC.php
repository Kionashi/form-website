<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RTC extends Model
{
    protected $table='rtc';
    
    public function vehicleClass() {
    	return $this->belongsTo('App\VehicleClass','vehicle_class_id');
    }
    public function inspector(){
    	return $this->belongsTo('App\User','inspector_id');
    }
}
