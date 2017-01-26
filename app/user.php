<?php

namespace App

use Illuminate\Database\Eloquent\Model;

class User extends Model{
	
	/**
     * Get the categories from the user.
     */
	public function categories(){
		return $this->hasMany('App\Category');
	}
	
}
