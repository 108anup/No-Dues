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
        //TODO:: Suhas Add Dues
        DB::table('student')->insert([
            'name' => 'Suhas Kantekar',
            'email' => 'suhas.kantekar@iitg.ernet.in',
            'dept' => 'cse',
            'hostel' => 'barak',
            'superviser_email' => 'pkdas@iitg.ernet.in',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
