<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dates', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('picture_path')->nullable();
            $table->string('user_name');
            $table->string('site_name');
            $table->integer('picture_rate');
            $table->integer('cool_rate');
            $table->integer('repeat_rate');
            $table->integer('nice_rate');
            $table->string('review');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dates');
    }
}
