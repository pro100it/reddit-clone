<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelBsmtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('modelbsmt', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model',25);
            $table->string('modelnumber',10);
            $table->string('modelimei',15);
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
      Schema::dropIfExists('modelbsmt');
    }
}
