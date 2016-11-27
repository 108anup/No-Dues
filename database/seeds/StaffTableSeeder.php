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
		$role1 = ['superviser','warden'];
		$role2 = ['registrar', 'warden'];
		$role3 = ['library'];
		$role_dept_prof = ['prof'];
		$saradhi_sir = ['prof','warden','hod'];

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

		DB::table('staff')->insert([
			'name' => 'Amit Awekar',
			'email' => 'AmitAwekar@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Arijit Sur',
			'email' => 'ArijitSur@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Arnab Sarkar',
			'email' => 'ArnabSarkar@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Aryabartta Sahu',
			'email' => 'AryabarttaSahu@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Ashish Anand',
			'email' => 'AshishAnand@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Benny George K',
			'email' => 'BennyGeorgeK@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Chandan Karfa',
			'email' => 'ChandanKarfa@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Deepanjan Kesh',
			'email' => 'DeepanjanKesh@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Diganta Goswami',
			'email' => 'DigantaGoswami@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'G. Sajith',
			'email' => 'G.Sajith@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Gautam Barua',
			'email' => 'GautamBarua@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Hemangee K. Kapoor',
			'email' => 'HemangeeK.Kapoor@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Jatindra Kumar Deka',
			'email' => 'JatindraKumarDeka@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'John Jose',
			'email' => 'JohnJose@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Pinaki Mitra',
			'email' => 'PinakiMitra@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Pradip Kr. Das',
			'email' => 'PradipKr.Das@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Purandar Bhaduri',
			'email' => 'PurandarBhaduri@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'R. Inkulu',
			'email' => 'R.Inkulu@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Rashmi Dutta Baruah',
			'email' => 'RashmiDuttaBaruah@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'S. V. Rao',
			'email' => 'S.V.Rao@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Samit Bhattacharya',
			'email' => 'SamitBhattacharya@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Sanasam Ranbir Singh',
			'email' => 'SanasamRanbirSingh@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Santosh Biswas',
			'email' => 'SantoshBiswas@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Shivashankar B. Nair',
			'email' => 'ShivashankarB.Nair@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Sukumar Nandi',
			'email' => 'SukumarNandi@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'Sushanta Karmakar',
			'email' => 'SushantaKarmakar@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'T. Venkatesh',
			'email' => 'T.Venkatesh@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => '',
			'purpose' => json_encode($role_dept_prof),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);

		DB::table('staff')->insert([
			'name' => 'V. Vijaya Saradhi',
			'email' => 'V.VijayaSaradhi@iitg.ernet.in',
			'dept' => 'Computer Science and Engineering',
			'hostel' => 'Barak',
			'purpose' => json_encode($saradhi_sir),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s"),
		]);
    }
}
