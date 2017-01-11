<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->integer('year');
            $table->string('director');
            $table->string('yt_video_id', 255);
            $table->string('uri_poster', 255);
            //$table->dateTime('time');
            //$table->string('password')->unique();
           // $table->string('poster'); slika filma
           // $table->float('rating');
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
        Schema::drop('movies');
    }
}
