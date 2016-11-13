<?php

use Illuminate\Database\Seeder;
use App\;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user=new Student;
    	$user->name='Ritveeka';
    	$user->email='ritveeka@iitg.ernet.in';
    	$user->password=bcrypt('secret');
        $user->dept='cse';
        $user->hostel='dhansiri';
        $user->staff_id='staff_id';
    	$user->save();    
    }
}
