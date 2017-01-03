<?php

use Illuminate\Database\Seeder;
use App\Rating;

class RatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rating1  = new  Rating();
        $rating1->movie_name = "Black Swan";
        $rating1->rating = 8.24;
        $rating1->save();

        $rating2  = new  Rating();
        $rating2->movie_name = "Beautiful mind";
        $rating2->rating = 8.2;
        $rating2->save();

        $rating3  = new  Rating();
        $rating3->movie_name = "Star wars 1";
        $rating3->rating = 0.0;
        $rating3->save();

        $rating4  = new  Rating();
        $rating4->movie_name = "Godfather 1";
        $rating4->rating = 0.0;
        $rating4->save();

        $rating5  = new  Rating();
        $rating5->movie_name = "Life is beautiful";
        $rating5->rating = 0.0;
        $rating5->save();

        $rating6  = new  Rating();
        $rating6->movie_name = "King's speech";
        $rating6->rating = 0.0;
        $rating6->save();





    }

}
