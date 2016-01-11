<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('enlace_id')->unsigned()->index();
            $table->string('name', 40);
            $table->string('job_title', 25);
            $table->string('phone', 11);
            $table->string('phone_ex', 5);
            $table->string('phone2', 11);
            $table->string('phone2_ex', 5);
            $table->string('movil', 11);
            $table->string('email', 60);
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
        Schema::drop('contactos');
    }
}
