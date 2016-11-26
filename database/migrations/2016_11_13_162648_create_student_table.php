<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('hostel');
            $table->string('dept');
            $table->integer('superviser_id');
            $table->timestamps();
            $table->boolean('care_taker');
            $table->boolean('gymkhana');
            $table->boolean('submit_thesis');
            $table->boolean('online_no_dues_for_cc');
            $table->boolean('deptno_due_and_workshop');
            $table->boolean('warden');
            $table->boolean('library');
            $table->boolean('cc_in_charge');
            $table->boolean('asst_registrar');
            $table->boolean('hod');
            $table->boolean('account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
