<?php

use App\Reservation;
use Illuminate\Database\Seeder;



class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $table->integer('user_id')->unsigned()->foreign('user_id')->reference('id')->on('users')->onDelete('cascade');
            $table->integer('show_id')->unsigned()->foreign('show_id')->reference('id')->on('shows')->onDelete('cascade');
            $table->integer('seat_id')->unsigned()->foreign('seat_id')->reference('id')->on('seats')->onDelete('cascade');
            $table->integer('price');*/

        $reservation1 = new Reservation();
        $reservation1->user_id = 2;
        $reservation1->show_id = 1;
        $reservation1->seat_id = 3;
        $reservation1->save();


        $reservation1 = new Reservation();
        $reservation1->user_id = 3;
        $reservation1->show_id = 3;
        $reservation1->seat_id = 10;
        $reservation1->save();



        $reservation1 = new Reservation();
        $reservation1->user_id = 4;
        $reservation1->show_id = 5;
        $reservation1->seat_id = 130;
        $reservation1->save();






    }
}
