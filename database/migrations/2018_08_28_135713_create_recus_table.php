<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('navire');
            $table->string('n_gros');
            $table->string('n_convoi');
            $table->string('navire');
            $table->string('charges_sur');
            $table->string('pointeur');
            $table->increments('id');
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
        Schema::dropIfExists('recus');
    }
}
