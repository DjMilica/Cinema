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
        $movie1->year = 2010;
        $movie1->director = "Darren Aronofsky";
        $movie1->yt_video_id = "https://www.youtube.com/watch?v=5jaI1XOB-bs";
        $movie1->uri_poster = 'black_swan.jpeg';
       // $movie1->time = " 2016-03-09 18:00:00";
      //  $movie1->rating=8.64;
        $movie1->save();

        $movie2 = new Movie();
        $movie2->name = "King's speech";
        $movie2->year = 2010;
        $movie2->director = "Tom Hooper";
        $movie2->yt_video_id = "https://www.youtube.com/watch?v=pzI4D6dyp_o";
        $movie2->uri_poster = 'kings_speech1.jpg';
       // $movie2->rating = 8.5;
        $movie2->save();

        $movie3 = new Movie();
        $movie3->name = "Beautiful mind";
        $movie3->year = 2001;
        $movie3->director = "Ron Howard";
        $movie3->yt_video_id = "https://www.youtube.com/watch?v=aS_d0Ayjw4o";
        $movie3->uri_poster = 'beautiful_mind1.jpg';
       // $movie3->rating = 8.5;
        $movie3->save();

        $movie4 = new Movie();
        $movie4->name = "Life is beautiful";
        $movie4->year = 1997;
        $movie4->director = "  Roberto Benigni ";
        $movie4->yt_video_id = "https://www.youtube.com/watch?v=pAYEQP8gx3w";
        $movie4->uri_poster = 'beautiful.jpg';
       // $movie4->rating = 8.5;
        $movie4->save();


        $movie7 = new Movie();
        $movie7->name = "The Pianist";
        $movie7->year = 2002;
        $movie7->director = "Roman Polanski";
        $movie7->yt_video_id = "https://www.youtube.com/watch?v=bD7bpG-zDJQ";
        $movie7->uri_poster = 'the_pianist.jpeg';
      //  $movie7->rating = 9.0;
        $movie7->save();

        $movie8 = new Movie();
        $movie8->name = "Amélie";
        $movie8->year = 2001;
        $movie8->director = "Jean-Pierre Jeunet";
        $movie8->yt_video_id = "https://www.youtube.com/watch?v=sY1S34973zA";
        $movie8->uri_poster = 'amelie.jpg';
      //  $movie8->rating = 9.5;
        $movie8->save();

        $movie9 = new Movie();
        $movie9->name = "Mr. Nobody";
        $movie9->year = 2009;
        $movie9->director = "Jaco Van Dormael";
        $movie9->yt_video_id = "https://www.youtube.com/watch?v=sY1S34973zA";
        $movie9->uri_poster = 'mr_nobody.jpg';
        //  $movie8->rating = 9.5;
        $movie9->save();

        $movie10 = new Movie();
        $movie10->name = "Fight club";
        $movie10->year = 1999;
        $movie10->director = "David Fincher";
        $movie10->yt_video_id = "https://www.youtube.com/watch?v=sY1S34973zA";
        $movie10->uri_poster = 'fight.jpg';
        //  $movie8->rating = 9.5;
        $movie10->save();

        $movie11 = new Movie();
        $movie11->name = "Eternal Sunshine of the Spotless Mind";
        $movie11->year = 2004;
        $movie11->director = "Michel Gondry";
        $movie11->yt_video_id = "https://www.youtube.com/watch?v=sY1S34973zA";
        $movie11->uri_poster = 'sunshine.jpg';
        //  $movie8->rating = 9.5;
        $movie11->save();

        $movie12 = new Movie();
        $movie12->name = "Kasablanca";
        $movie12->year = 1942;
        $movie12->director = " Michael Curtiz ";
        $movie12->yt_video_id = "https://www.youtube.com/watch?v=sY1S34973zA";
        $movie12->uri_poster = 'kasablanka.JPG';
        //  $movie8->rating = 9.5;
        $movie12->save();
    }
}
