<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTblTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('student_tbl', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('student_name');
            $table->string('student_roll');
            $table->string('student_fathersname');
            $table->string('student_mothersname');
            $table->string('student_email');
            $table->string('student_phone');
            $table->string('student_address');
            $table->string('student_password');
            $table->string('student_department');
            $table->string('student_adminssionyear');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('student_tbl');
    }
}