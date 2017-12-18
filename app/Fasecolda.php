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
  	public function firstReference() {
  		return $this->belongsTo('App\Reference','first_reference_id');
  	}
  	public function secondReference() {
  		return $this->belongsTo('App\Reference','second_reference_id');
  	}
    public function vehicleClass() {
      return $this->belongsTo('App\VehicleClass','vehicle_class_id');
    }
    public function vehicleService() {
      return $this->belongsTo('App\VehicleService','vehicle_service_id');
    }
}
