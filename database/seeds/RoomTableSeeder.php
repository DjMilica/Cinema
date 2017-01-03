<?php

use App\Room;
use Illuminate\Database\Seeder;


class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create(['description' => 'Najveca sala - broj mesta 100']);
        Room::create(['description' => 'Mala sala - broj mesta 50']);
    }
}
