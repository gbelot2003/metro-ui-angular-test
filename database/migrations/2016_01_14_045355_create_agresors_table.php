<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgresorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agresors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alertas_id')->unsigned()->index();
            $table->string('name', 100);
            $table->integer('tipoagresors_id')->unsigned();
            $table->integer('estadojudicial_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('agresors');
    }
}
