<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(MovieTableSeeder::class);
        $this->call(RoomTableSeeder::class);
        $this->call(SeatTableSeeder::class);
        $this->call(ShowTableSeeder::class);
        $this->call(ReservationTableSeeder::class);
        $this->call(RatingTableSeeder::class);
    }
}
