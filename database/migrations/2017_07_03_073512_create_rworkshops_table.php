<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRworkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_workshops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userID');
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->string('wType');
            $table->string('why');
            $table->string('status')->default('In-Progress');
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
        Schema::drop('r_workshops');
    }
}
