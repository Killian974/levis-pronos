<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePronosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pronos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sport');
            $table->date('date_match');
            $table->integer('status')->default(0);
            $table->string('team_1');
            $table->string('team_2');
            $table->string('prono');
            $table->string('cote');
            $table->date('create_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pronos');
    }
}
