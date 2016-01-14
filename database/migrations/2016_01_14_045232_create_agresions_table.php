<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgresionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agresions', function(Blueprint $table)
        {
            $table->increments('id')->index();
            $table->string('agresion');
            $table->integer('agresioncategorias_id')->unsigned()->index();
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('agresions');
    }
}
