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
        /* $table->string('name');
            $table->string('seeds');
            $table->string('cost');
            $table->time('date');
            $table->integer('time');*/


        $movie1 = new Movie();
        $movie1->name = "Black swan";
        $movie1->seeds = 60;
        $movie1->cost = 500;
        $movie1->time = " 2016-03-09 18:00:00";
        $movie1->password = "BS.3_9.18";
        $movie1->save();

        $movie2 = new Movie();
        $movie2->name = "King's speech";
        $movie2->seeds = 60;
        $movie2->cost = 400;
        $movie2->time = " 2016-03-09 20:30:00";
        $movie2->password = "KS.3_9.20";
        $movie2->save();

        $movie3 = new Movie();
        $movie3->name = "Beautiful mind";
        $movie3->seeds = 50;
        $movie3->cost = 450;
        $movie3->time = " 2016-03-10 18:00:00";
        $movie3->password = "BM.3_10.18";
        $movie3->save();

        $movie4 = new Movie();
        $movie4->name = "Life is beautiful";
        $movie4->seeds = 60;
        $movie4->cost = 500;
        $movie4->time = " 2016-03-10 20:00:00";
        $movie4->password = "LS.3_10.20";
        $movie4->save();

        $movie5 = new Movie();
        $movie5->name = "Life is beautiful";
        $movie5->seeds = 50;
        $movie5->cost = 500;
        $movie5->time = " 2016-03-10 22:46:00";
        $movie5->password = "LS.3_10.22";
        $movie5->save();

        $movie6 = new Movie();
        $movie6->name = "Black swan";
        $movie6->seeds = 60;
        $movie6->cost = 500;
        $movie6->time = " 2016-03-12 18:00:00";
        $movie6->password = "BS.3_12.18";
        $movie6->save();

        $movie7 = new Movie();
        $movie7->name = "Star wars 1";
        $movie7->seeds = 60;
        $movie7->cost = 700;
        $movie7->time = " 2016-03-12 20:00:00";
        $movie7->password = "SW1.3_12.20";
        $movie7->save();

        $movie8 = new Movie();
        $movie8->name = "Godfather 1";
        $movie8->seeds = 40;
        $movie8->cost = 700;
        $movie8->time = " 2016-03-13 20:00:00";
        $movie8->password = "G1.3_13.20";
        $movie8->save();
    }
}
