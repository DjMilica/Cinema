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
        /* $table->increments('id');
            $table->integer('user_id')->unsigned()->foreign('user_id')->reference('id')->on('users')->onDelete('cascade');
            $table->integer('movie_id')->unsigned()->foreign('movie_id')->reference('id')->on('movies')->onDelete('cascade');
            $table->float('rating');*/


        $rating1  = new  Rating();
        $rating1->user_id = 2;
        $rating1->movie_id = 3;
        $rating1->rating = 8.24;
        $rating1->save();

        $rating2  = new  Rating();
        $rating2->user_id = 3;
        $rating2->movie_id = 5;
        $rating2->rating = 8.2;
        $rating2->save();

        $rating3  = new  Rating();
        $rating3->user_id = 4;
        $rating3->movie_id = 2;
        $rating3->rating = 5.0;
        $rating3->save();

        $rating4  = new  Rating();
        $rating4->user_id = 2;
        $rating4->movie_id = 1;
        $rating4->rating = 8.0;
        $rating4->save();





    }

}
