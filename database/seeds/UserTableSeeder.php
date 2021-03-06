<?php

use Illuminate\Database\Seeder;
use App\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // add admin
        User::truncate();
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role_id' => 1
        ]);

        // add users
        $user1 = new User();
        $user1->first_name = "Tom";
        $user1->last_name = "Tomic";
        $user1->email = "tom@examaple.com";
        $user1->password = bcrypt("gluapa");
        $user1->role_id = 2;
        $user1->save();



        $user2 = new User();
        $user2->first_name = "Nik";
        $user2->last_name = "Nikic";
        $user2->email = "nik@examaple.com";
        $user2->password = bcrypt("qwer");
        $user2->role_id = 2;
        $user2->save();


        $user3 = new User();
        $user3->first_name = "Tom";
        $user3->last_name = "Nikic";
        $user3->email = "tm@examaple.com";
        $user3->password = bcrypt("1234");
        $user3->role_id = 2;
        $user3->save();

    }
}
