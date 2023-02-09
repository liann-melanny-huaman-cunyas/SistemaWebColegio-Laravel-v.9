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
            $table->unsignedBigInteger('cp');
            $table->unsignedBigInteger('tc');
            $table->unsignedBigInteger('student');
            $table->foreign('cp')->references('id')->on('competence_periods')->onDelete('cascade');
            $table->foreign('tc')->references('id')->on('teacher_courses')->onDelete('cascade');
            $table->foreign('student')->references('id')->on('students')->onDelete('cascade');
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
