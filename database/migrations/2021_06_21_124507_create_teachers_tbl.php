<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTbl extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('teachers_tbl', function (Blueprint $table) {
             $table->increments('teachers_id');
             $table->string('teachers_name');
             $table->string('teachers_email');
             $table->string('teachers_phone');
             $table->string('teachers_address');
             $table->string('teachers_department');
             $table->string('teachers_password');
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('teachers_tbl');
    }
}
