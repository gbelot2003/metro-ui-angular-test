<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enlaces', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name', 60)->unique();
			$table->text('address');
			$table->integer('vsat');
			$table->integer('grupo_id')->index()->unsigned();
			$table->integer('departamento_id')->index()->unsigned();
			$table->integer('municipio_id')->index()->unsigned();
			$table->integer('user_id')->index()->unsigned();
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
        Schema::drop('enlaces');
    }
}
