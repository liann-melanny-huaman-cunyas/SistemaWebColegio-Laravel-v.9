<?php

use App\Models\Degrees;
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
        Schema::create('degrees', function (Blueprint $table) {
            $table->id();
            $table->enum('academic_degree',[ Degrees::primergrado,Degrees::segundogrado,
                                            Degrees::tercergrado,Degrees::cuartogrado,
                                            Degrees::quintogrado,Degrees::sextogrado])
                                            ->default(Degrees::primergrado);
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
        Schema::dropIfExists('degrees');
    }
};
