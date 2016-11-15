<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
	protected $table='staff';

	//Type case the role attribute as an array of strings from json
	//Did this because cannot declare an array of strings using eloquent
	protected $casts = [
		'role' => 'array'
	];
}
