<?php

use Illuminate\Database\Seeder;

class DeptProfTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Dept_Prof_Status')->insert([
            'stud_id' => 1,
            'prof_id' => 31,
            'status' => 'Complex',
        ]);
    }
}
