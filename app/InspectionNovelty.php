<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionNovelty extends Model
{
	public $table = 'inspections_novelties';
    
    public function novelty() {
    	return $this->belongsTo('App\Novelty','novelty_id');
    }
}
