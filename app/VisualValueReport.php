<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisualValueReport extends Model
{
    public function visualValueFieldValue() {
    	return $this->belongsTo('App\VisualValueFieldValue','visual_value_field_value_id');
    }
}
