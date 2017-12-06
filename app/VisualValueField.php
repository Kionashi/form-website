<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisualValueField extends Model
{
    public function visualValueFieldValues() {
    	return $this->hasMany('App\VisualValueFieldValue');
    }
}
