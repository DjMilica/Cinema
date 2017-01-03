<?php

use Illuminate\Database\Seeder;
use App\Seat;

class SeatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //prva sala od 100 mesta
        //trenutno je svaka mesto slobodno
        for($j = 0; $j < 10; $j++)
        {

            for ($k = 0; $k < 10; $k++)
            {
                Seat::create([
                    'room_id' => 1,
                    'row' => $j + 1,
                    'column' => $k + 1,
                    'exist' => true
                ]);
            }
        }

        //druga manja sala od 50 mesta
        for($j = 0; $j < 5; $j++)
        {
            // rows
            for ($k = 0; $k < 10; $k++)
            {
                Seat::create([
                    'room_id' => 2,
                    'row' => $j + 1,
                    'column' => $k + 1,
                    'exist' => true
                ]);
            }
        }

    }
}
