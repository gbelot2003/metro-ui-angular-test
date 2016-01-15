<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgredidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agredidos', function(Blueprint $table)
        {
            $table->increments('id')->index();
            $table->integer('alertas_id')->unsigned()->index();
            $table->string('name');
            $table->integer('generos_id')->unsigned()->index();
            $table->string('medios');
            $table->integer('medios_id')->unsigned()->index();
            $table->integer('tiposujetoagredidos_id')->unsigned()->index();
            $table->integer('agresions_id')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('agredidos');
    }
}
