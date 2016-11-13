<?php

use Illuminate\Database\Seeder;
use App\;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user=new User;
    	$user->name='Ritveeka';
    	$user->email='ritveeka@iitg.ernet.in';
    	$user->password=bcrypt('secret');
    	$user->role='student';
    	$user->rel_id=1;
    	$user->save();

    	$user=new User;
    	$user->name='P K Das';
    	$user->email='pkdas@iitg.ernet.in';
    	$user->password=bcrypt('secret');
    	$user->role='supervisor';
    	$user->rel_id=1;
    	$user->save();

    	$user=new User;
    	$user->name='P K Das';
    	$user->email='pkdas@iitg.ernet.in';
    	$user->password=bcrypt('secret');
    	$user->role='hod';
    	$user->rel_id=1;
    	$user->save();

    	$user=new User;
    	$user->name='P K Das';
    	$user->email='pkdas@iitg.ernet.in';
    	$user->password=bcrypt('secret');
    	$user->role='warden';
    	$user->rel_id=1;
    	$user->save();
    	
    	$user=new User;
    	$user->name='a k gupta';
    	$user->email='gupta@iitg.ernet.in';
    	$user->password=bcrypt('secret');
    	$user->role='registrar';
    	$user->rel_id=2;
    	$user->save();    
    }
}
