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
        $rating1->name = "Black Swan";
        $rating1->rating = 8.200;


        $rating2  = new  Rating();
        $rating2->name = "Beautiful mind";
        $rating2->rating = 8.200;

        $rating3  = new  Rating();
        $rating3->name = "Star wars 1";
        $rating3->rating = 0.0;

        $rating4  = new  Rating();
        $rating4->name = "Godfather 1";
        $rating4->rating = 0.0;

        $rating5  = new  Rating();
        $rating5->name = "Life is beautiful";
        $rating5->rating = 0.0;

        $rating6  = new  Rating();
        $rating6->name = "King's speech";
        $rating6->rating = 0.0;





    }

}
