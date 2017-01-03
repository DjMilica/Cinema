<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $table->increments('id');
            $table->string('name');
            $table->integer('year');
            $table->string('director');
            //$table->dateTime('time');
           // $table->string('poster'); slika filma
            $table->float('rating');*/


        $movie1 = new Movie();
        $movie1->name = "Black swan";
        $movie1->year = 2013;
        $movie1->director = "Jack";
       // $movie1->time = " 2016-03-09 18:00:00";
        $movie1->rating=8.64;
        $movie1->save();

        $movie2 = new Movie();
        $movie2->name = "King's speech";
        $movie2->year = 2014;
        $movie2->director = "Dodaj";
        $movie2->rating = 8.5;
        $movie2->save();

        $movie3 = new Movie();
        $movie3->name = "Beautiful mind";
        $movie3->year = 2011;
        $movie3->director = "Dodaj";
        $movie3->rating = 8.5;
        $movie3->save();

        $movie4 = new Movie();
        $movie4->name = "Life is beautiful";
        $movie4->year = 2010;
        $movie4->director = "Dodaj";
        $movie4->rating = 8.5;
        $movie4->save();


        $movie7 = new Movie();
        $movie7->name = "Star wars 1";
        $movie7->year = 1999;
        $movie7->director = "Dodaj";
        $movie7->rating = 9.0;
        $movie7->save();

        $movie8 = new Movie();
        $movie8->name = "Godfather 1";
        $movie8->year = 1990;
        $movie8->director = "Dodaj";
        $movie8->rating = 9.5;
        $movie8->save();
    }
}
