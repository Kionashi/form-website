<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class VisualValue extends Model
{
    public function visualValueFields() {
    	return $this->hasMany('App\VisualValueField');
    }
    
}
