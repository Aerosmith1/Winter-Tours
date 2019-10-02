<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable=array('region_id','name','description','image');


    public function regions(){


    	return $this->belongsTo('regions');
    }
}
