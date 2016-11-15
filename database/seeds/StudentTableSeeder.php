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
            'dept' => 'cse',
            'hostel' => 'barak',
            'care_taker' => false,
            'gymkhana' => false,
            'submit_thesis' => false,
            'online_no_dues_for_cc' => false,
            'deptno_due_and_workshop' => false,
            'warden' => false,
            'library' => false,
            'cc_in_charge' => false,
            'asst_registrar' => false,
            'hod' => false,
            'account' => false,
            'superviser_email' => 'pkdas@iitg.ernet.in',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}

