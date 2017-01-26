<?php

namespace App

use Illuminate\Database\Eloquent\Model;

class User extends Model{
	
	public function categories(){
		return $this->hasMany('App\Category');
	}
	
}
