<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    public function fasecolda() {
    	return $this->belongsTo('App\Fasecolda','fasecolda_id');
    }
    public function fasecoldaYearValue() {
    	return $this->belongsTo('App\FasecoldaYearValue','fasecolda_year_value_id');
    }
   public function accessories() {
   		return $this->hasMany('App\Accesory');
   }
   public function novelties() {
   		return $this->belongsToMany('App\Novelty','inspections_novelties');
   }
   public function visualValueFieldValues() {
      return $this->belongsToMany('App\VisualValueFieldValue','visual_value_reports');
   }
}
