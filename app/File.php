<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function parentFolder() {
    	return $this->belongsTo('App\Folder','parent_id');
    }
    
    public function user() {
    	return $this->belongsTo('App\User','user_id');
    }
}
