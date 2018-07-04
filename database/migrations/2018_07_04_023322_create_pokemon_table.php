<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        echo("Creating pokemon table.\n");
        Schema::create('pokemon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('n_dex_number')->unsigned();
            $table->string('image_url')->nullable();
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
        echo("Dropping pokemon table.\n");
        Schema::dropIfExists('pokemon');
    }
}
