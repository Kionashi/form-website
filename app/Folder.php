<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    public function parent() {
    	return $this->belongsTo('App\Folder','parent_id');
    }
}
