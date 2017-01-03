<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * Napravljeno kad je napravljena i model User.php u app folderu zahvaljujuci -m u komandi
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role_id')->unsigned()->foreign('role_id')->reference('id')->on('role')->onDelete('cascade');
            /* omogucava Laravelu da sacuva nesto ukoliko imamo remeber me check box, cuva u kolacicima
                bitno je jer izbacuje gresku kada se koristi ugradjena autentikacija laravela */
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
