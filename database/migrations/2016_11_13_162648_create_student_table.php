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
            $table->string('care_taker');
            $table->string('gymkhana');
            $table->string('superviser');
            $table->string('online_no_dues_for_cc');
            $table->string('deptno_due_and_workshop');
            $table->string('warden');
            $table->string('library');
            $table->string('cc_in_charge');
            $table->string('asst_registrar');
            $table->string('hod');
            $table->string('account');
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
