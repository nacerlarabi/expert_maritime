<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('navire');
            $table->string('n_gros');
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
        Schema::dropIfExists('transferes');
    }
}
