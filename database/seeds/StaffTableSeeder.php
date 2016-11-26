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
		$role2 = ['registrar', 'warden'];
		$role3 = ['library'];
		DB::table('staff')->insert([
			'name' => 'P K Das',
			'email' => 'pkdas@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => 'Dhansiri',
			'purpose' => json_encode($role1),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'a k gupta',
			'email' => 'gupta@iitg.ernet.in',
			'dept' => 'HSS',
			'hostel' => 'Barak',
			'purpose' => json_encode($role2),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Librarian',
			'email' => 'library@iitg.ernet.in',
			'dept' => '',
			'hostel' => '',
			'purpose' => json_encode($role3),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);
    }
}
