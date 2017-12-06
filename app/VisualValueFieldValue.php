<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisualValueFieldValue extends Model
{
    public function visualValueField () {
    	
    	return $this->belongsTo('App\VisualValueField');
    }
}
