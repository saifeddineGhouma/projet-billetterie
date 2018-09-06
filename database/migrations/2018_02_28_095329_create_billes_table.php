<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('numero');
            $table->integer('zone_id');
            $table->string('chaisser_num');
            $table->string('port_num');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('match_id');
            $table->foreign('match_id')->references('id')->on('matches');
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
        Schema::dropIfExists('billes');
    }
}
