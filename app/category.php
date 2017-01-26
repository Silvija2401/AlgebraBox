<?php

namespace App

use Illuminate\Database\Eloquent\Model;

class Category extends Model{
	
	 /**
     * Get the user that owns the category.
     */
	public function user(){
		return $this->belongsTo('App\User');
	} 
	
	
}
