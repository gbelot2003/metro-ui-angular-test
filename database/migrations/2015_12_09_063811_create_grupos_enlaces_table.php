<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposEnlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_enlaces', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('clientes_id')->index()->unsigned();
            $table->string('code');
			$table->string('name', 60);
			$table->text('detail')->nullable();
			$table->integer('user_id')->unsingned();
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
        Schema::drop('grupos_enlaces');
    }
}
