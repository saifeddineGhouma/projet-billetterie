<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dateMatche');
            $table->time('heureMatche');
            $table->integer('Nb_supporteur');
          
            $table->integer('equipe_A_id');
            $table->integer('equipe_B_id');
            $table->integer('stade_id');
            $table->string('type');
            $table->foreign('equipe_A_id')->references('id')->on('equipes');
            $table->foreign('equipe_B_id')->references('id')->on('equipes');
            $table->foreign('stade_id')->references('id')->on('stades');

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
        Schema::dropIfExists('matches');
    }
}
