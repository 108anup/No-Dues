<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Dues added as boolean
        DB::table('student')->insert([
            'name' => 'Suhas Kantekar',
            'email' => 'suhas.kantekar@iitg.ernet.in',
            'dept' => 'Computer Science and Engineering',
            'hostel' => 'Barak',
            'care_taker' => "Due",
            'gymkhana' => "Due",
            'superviser' => "Due",
            'online_no_dues_for_cc' => "Due",
            'deptno_due_and_workshop' => "Due",
            'warden' => "Due",
            'library' => "Due",
            'cc_in_charge' => "Due",
            'asst_registrar' => "Due",
            'hod' => "Due",
            'account' => "Due",
            'superviser_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('student')->insert([
            'name' => 'Anup Agarwal',
            'email' => 'anup.agarwal@iitg.ernet.in',
            'dept' => 'Computer Science and Engineering',
            'hostel' => 'Barak',
            'care_taker' => "Due",
            'gymkhana' => "Due",
            'superviser' => "Due",
            'online_no_dues_for_cc' => "Due",
            'deptno_due_and_workshop' => "Due",
            'warden' => "Due",
            'library' => "Due",
            'cc_in_charge' => "Due",
            'asst_registrar' => "Due",
            'hod' => "Due",
            'account' => "Due",
            'superviser_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('student')->insert([
            'name' => 'Ritveeka Vashishta',
            'email' => 'ritveeka@iitg.ernet.in',
            'dept' => 'Computer Science and Engineering',
            'hostel' => 'Dhansiri',
            'care_taker' => "Due",
            'gymkhana' => "Due",
            'superviser' => "Due",
            'online_no_dues_for_cc' => "Due",
            'deptno_due_and_workshop' => "Due",
            'warden' => "Due",
            'library' => "Due",
            'cc_in_charge' => "Due",
            'asst_registrar' => "Due",
            'hod' => "Due",
            'account' => "Due",
            'superviser_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('student')->insert([
            'name' => 'Dummy 1',
            'email' => 'dummy1@iitg.ernet.in',
            'dept' => 'ECE',
            'hostel' => 'Dhansiri',
            'care_taker' => "Due",
            'gymkhana' => "Due",
            'superviser' => "Due",
            'online_no_dues_for_cc' => "Due",
            'deptno_due_and_workshop' => "Due",
            'warden' => "Due",
            'library' => "Due",
            'cc_in_charge' => "Due",
            'asst_registrar' => "Due",
            'hod' => "Due",
            'account' => "Due",
            'superviser_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('student')->insert([
            'name' => 'Dummy 2',
            'email' => 'dummy2@iitg.ernet.in',
            'dept' => 'EEE',
            'hostel' => 'Umiam',
            'care_taker' => "Due",
            'gymkhana' => "Due",
            'superviser' => "Due",
            'online_no_dues_for_cc' => "Due",
            'deptno_due_and_workshop' => "Due",
            'warden' => "Due",
            'library' => "Due",
            'cc_in_charge' => "Due",
            'asst_registrar' => "Due",
            'hod' => "Due",
            'account' => "Due",
            'superviser_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('student')->insert([
            'name' => 'Dummy 3',
            'email' => 'dummy3@iitg.ernet.in',
            'dept' => 'EEE',
            'hostel' => 'Manas',
            'care_taker' => "Due",
            'gymkhana' => "Due",
            'superviser' => "Due",
            'online_no_dues_for_cc' => "Due",
            'deptno_due_and_workshop' => "Due",
            'warden' => "Due",
            'library' => "Due",
            'cc_in_charge' => "Due",
            'asst_registrar' => "Due",
            'hod' => "Due",
            'account' => "Due",
            'superviser_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}

