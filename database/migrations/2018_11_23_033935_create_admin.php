<?php

use Illuminate\Database\Migrations\Migration;
use App\Model\User;


class CreateAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
