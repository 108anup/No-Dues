<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
	protected $table='staff';

	public function students(){
		return $this->hasMany(Student::class,'superviser_id');
	}

	//calling this method for a prof will set correct superviser_id in students_table 
	public function addStudent(Student $student){
		$student->superviser_id = $this->id;
		$student->save();
	}
}

