<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('transports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model',10);
            $table->string('govnumber',10);
            $table->string('blockbsmt',15);
            $table->integer('user_id');

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
       Schema::dropIfExists('transports');
    }
}
