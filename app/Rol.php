<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model {

	public function users()
	{
		$this->hasMany('App\User');
	}

}
