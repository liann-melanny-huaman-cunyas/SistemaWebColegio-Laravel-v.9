<?php

use App\Models\Students;
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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_surnames');
            $table->integer('student_DNI')->unique();
            $table->integer('student_cell')->unique();
            $table->string('student_address')->unique();
            $table->date('date_of_birth');
            $table->integer('student_age');
            $table->enum('gender',[Students::femenino, Students::masculino]);
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
        Schema::dropIfExists('students');
    }
};
