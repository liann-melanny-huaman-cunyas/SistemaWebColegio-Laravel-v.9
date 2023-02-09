<?php

use App\Models\Proxie;
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
        Schema::create('proxies', function (Blueprint $table) {
            $table->id();
            $table->string('proxy_name');
            $table->string('proxy_surnames');
            $table->integer('proxy_DNI');
            $table->integer('proxy_cell');
            $table->string('proxy_address');
            $table->integer('proxy_age');
            $table->enum('gender',[ Proxie::masculino,
                                    Proxie::femenino]);
            $table->string('proxy_relation');
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
        Schema::dropIfExists('proxies');
    }
};
