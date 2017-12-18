<?php

namespace App;

use App\ServiceRequest;
use Illuminate\Database\Eloquent\Model;


class BasicData extends Model
{
    protected $table = 'basic_data';
    
    public function brand() {
    	return $this->belongsTo('App\Brand','brand_id');
    }
    public function serviceRequest() {
    	return $this->belongsTo('App\ServiceRequest','service_id');
    }
  }
