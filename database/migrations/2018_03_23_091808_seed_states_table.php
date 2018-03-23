<?php

use App\State;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        State::create([
            'name_state' => 'На линии',
        ]);

        State::create([
            'name_state' => 'В ремонте',
        ]);

        State::create([
            'name_state' => 'Выбыла',
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
