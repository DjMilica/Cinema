<?php

use App\Show;
use Illuminate\Database\Seeder;

class ShowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*   $table->increments('id');
            $table->integer('movie_id')->unsigned()->foreign('movie_id')->reference('id')->on('movies')->onDelete('cascade');
            $table->integer('room_id')->unsigned()->foreign('room_id')->reference('id')->on('rooms')->onDelete('cascade');
            $table->dateTime('date');
           // $table->timestamp('date_time');
            $table->integer('price');*/


         $show1 = new Show();
         $show1->movie_id = 1;
         $show1->room_id = 1;
         $show1->date = " 2017-01-10 18:00:00";
         $show1->price=700;
         $show1->save();


        $show3 = new Show();
        $show3->movie_id = 2;
        $show3->room_id = 2;
        $show3->date = " 2017-01-12 21:00:00";
        $show3->price=500;
        $show3->save();

        $show4 = new Show();
        $show4->movie_id = 2;
        $show4->room_id = 1;
        $show4->date = " 2017-01-11 18:00:00";
        $show4->price=700;
        $show4->save();

        $show5 = new Show();
        $show5->movie_id = 5;
        $show5->room_id = 2;
        $show5->date = " 2017-01-11 20:00:00";
        $show5->price=500;
        $show5->save();

        $show6 = new Show();
        $show6->movie_id = 6;
        $show6->room_id = 1;
        $show6->date = " 2017-01-13 18:00:00";
        $show6->price=700;
        $show6->save();

        $show7 = new Show();
        $show7->movie_id = 3;
        $show7->room_id = 1;
        $show7->date = " 2017-01-14 18:00:00";
        $show7->price=700;
        $show7->save();

        $show8 = new Show();
        $show8->movie_id = 2;
        $show8->room_id = 2;
        $show8->date = " 2017-01-15 18:00:00";
        $show8->price=700;
        $show8->save();

    }
}
