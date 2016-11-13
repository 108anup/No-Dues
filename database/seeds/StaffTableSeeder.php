<?php

use Illuminate\Database\Seeder;
use App\;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user=new Staff;
    	$user->name='P K Das';
    	$user->email='pkdas@iitg.ernet.in';
    	$user->password=bcrypt('secret');
    	$user->hostel='dhansiri';
    	$user->dept='cse';
    	$user->save();
    	$user=new Staff;
    	$user->name='a k gupta';
    	$user->email='gupta@iitg.ernet.in';
    	$user->password=bcrypt('secret');
    	$user->dept='sa';
    	$user->hostel='none';
    	$user->save();  
    }
}
