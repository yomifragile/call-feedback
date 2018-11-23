<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Model\Agent;
use App\Model\Account;



class PopulateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        for($i = 0;$i<=9;$i++){

            $name = new \Nubs\RandomNameGenerator\Alliteration();
            $name = $name->getName();
            $name = explode(" ",$name);
            Agent::insert([
                'fname' => $name[0],
                'lname' => $name[1]
            ]);

            $account = new \Nubs\RandomNameGenerator\Alliteration();
            $account = $account->getName();
            $account = explode(" ",$account);
            Account::insert([
                'fname' => $account[0],
                'lname' => $account[1]
            ]);

        }


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
