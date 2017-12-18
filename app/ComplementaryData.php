<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplementaryData extends Model
{
    protected $table='complementary_data';
    
    public function color () {
    	return $this->belongsTo('App\Color','color_id');
    }
    public function cylinder() {
    	return $this->belongsTo('App\Cylinder','cylinder_id');
    }
    public function fuelType () {
    	return $this->belongsTo('App\FuelType','fuel_type_id');
    }
    public function vehicleService() {
    	return $this->belongsTo('App\VehicleService','service_id');
    }
}
