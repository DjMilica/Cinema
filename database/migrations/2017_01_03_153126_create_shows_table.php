<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('movie_id')->unsigned()->foreign('movie_id')->reference('id')->on('movies')->onDelete('cascade');
            $table->integer('room_id')->unsigned()->foreign('room_id')->reference('id')->on('rooms')->onDelete('cascade');
            $table->dateTime('date');
           // $table->timestamp('date_time');
            $table->integer('price');

            $table->rememberToken();
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
        Schema::drop('shows');
    }
}
