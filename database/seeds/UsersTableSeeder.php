<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->insert([
			'email' => 'suhas.kantekar@iitg.ernet.in',
			'type' => 'student',
			'password' => bcrypt('secret'),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('users')->insert([
			'email' => 'pkdas@iitg.ernet.in',
			'type' => 'staff',
			'password' => bcrypt('secret'),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('users')->insert([
			'email' => 'gupta@iitg.ernet.in',
			'type' => 'staff',
			'password' => bcrypt('secret'),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('users')->insert([
			'email' => 'library@iitg.ernet.in',
			'type' => 'staff',
			'password' => bcrypt('secret'),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('users')->insert([
			'email' => 'dummy1@iitg.ernet.in',
			'type' => 'staff',
			'password' => bcrypt('secret'),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('users')->insert([
			'email' => 'dummy2@iitg.ernet.in',
			'type' => 'staff',
			'password' => bcrypt('secret'),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('users')->insert([
			'email' => 'dummy3@iitg.ernet.in',
			'type' => 'staff',
			'password' => bcrypt('secret'),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('users')->insert([
			'email' => 'V.VijayaSaradhi@iitg.ernet.in',
			'password' => bcrypt('secret'),
			'type' => 'staff',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);
    }
}
