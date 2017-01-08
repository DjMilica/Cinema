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
        $movie1->yt_video_id = "https://www.youtube.com/watch?v=5jaI1XOB-bs";
        $movie1->uri_poster = '/public/posters/black_swan.jpeg';
       // $movie1->time = " 2016-03-09 18:00:00";
        $movie1->rating=8.64;
        $movie1->save();

        $movie2 = new Movie();
        $movie2->name = "King's speech";
        $movie2->year = 2014;
        $movie2->director = "Dodaj";
        $movie2->yt_video_id = "https://www.youtube.com/watch?v=pzI4D6dyp_o";
        $movie2->uri_poster = '/public/posters/kings_speech.jpeg';
        $movie2->rating = 8.5;
        $movie2->save();

        $movie3 = new Movie();
        $movie3->name = "Beautiful mind";
        $movie3->year = 2011;
        $movie3->director = "Dodaj";
        $movie3->yt_video_id = "https://www.youtube.com/watch?v=aS_d0Ayjw4o";
        $movie3->uri_poster = '/public/posters/beautiful_mind.jpg';
        $movie3->rating = 8.5;
        $movie3->save();

        $movie4 = new Movie();
        $movie4->name = "Life is beautiful";
        $movie4->year = 1998;
        $movie4->director = "Roberto Benini";
        $movie4->yt_video_id = "https://www.youtube.com/watch?v=pAYEQP8gx3w";
        $movie4->uri_poster = '/public/posters/life_is_beatiful.jpeg';
        $movie4->rating = 8.5;
        $movie4->save();


        $movie7 = new Movie();
        $movie7->name = "Star wars 1";
        $movie7->year = 1999;
        $movie7->director = "Dodaj";
        $movie7->yt_video_id = "https://www.youtube.com/watch?v=bD7bpG-zDJQ";
        $movie7->uri_poster = '/public/posters/star_wars1.jpeg';
        $movie7->rating = 9.0;
        $movie7->save();

        $movie8 = new Movie();
        $movie8->name = "Godfather 1";
        $movie8->year = 1972;
        $movie8->director = "Dodaj";
        $movie8->yt_video_id = "https://www.youtube.com/watch?v=sY1S34973zA";
        $movie8->uri_poster = 'public/posters/godfather1.jpg';
        $movie8->rating = 9.5;
        $movie8->save();
    }
}
