<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_name_id')->unsigned();
            $table->foreign('user_name_id')->references('id')->on('dates');
            $table->integer('picture_rate');
            $table->string('picture_path1');
            $table->string('picture_path2');
            $table->string('picture_path3');
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
        Schema::dropIfExists('ratings');
    }
}
