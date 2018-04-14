<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //
    public $timestamps = false;
	public function product(){
		return $this->belongsTo('App\Models/Product', 'product_id', 'id');
	}
}
