<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlerta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alertas', function(Blueprint $table)
        {
            $table->increments('id')->index();
            $table->string('title');
            $table->string('number'); //This is set manualy for now
            $table->integer('mes_id')->unsigned();
            $table->integer('year')->unsigned();
            $table->integer('departamentos_id')->unsigned();
            $table->integer('municipios_id')->unsigned();
            $table->text('body');
            $table->string('source')->null();
            $table->string('source_url')->null();
            $table->integer('published_state');
            $table->timestamp('published_date');
            $table->integer('usuarios_id')->unsigned();
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
        Schema::drop('alertas');
    }
}
