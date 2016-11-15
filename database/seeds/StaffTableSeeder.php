<?php

use Illuminate\Database\Seeder;
use App\Staff;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$role1 = ['superviser','hod','warden'];
		$role2 = ['registrar'];
		DB::table('staff')->insert([
			'name' => 'P K Das',
			'email' => 'pkdas@iitg.ernet.in',
			'dept' => 'cse',
			'hostel' => 'dhansiri',
			'role' => json_encode($role1),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'a k gupta',
			'email' => 'gupta@iitg.ernet.in',
			'dept' => 'sa',
			'hostel' => 'none',
			'role' => json_encode($role2),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);
    }
}
