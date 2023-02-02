<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->integer('score');

            $table->unsignedBigInteger('c_p_id');
            $table->unsignedBigInteger('t_c_id');
            $table->unsignedBigInteger('student_id');

            $table->foreign('c_p_id')->references('id')->on('competence_period')->onDelete('cascade');
            $table->foreign('t_c_id')->references('id')->on('teacher_course')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
};
