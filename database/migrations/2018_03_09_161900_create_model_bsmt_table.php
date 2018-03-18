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
            $table->integer('vendor_id')->unsigned()->nullable();
            $table->string('modelnumber',10);
            $table->string('modelimei',15);
            $table->integer('statusbsmt_id')->unsigned()->nullable(); 
            $table->timestamps(); 
            
            $table->foreign('vendor_id')
                    ->references('id')
                    ->on('vendorbsmt')
                    ->onDelete('set null');
            
            $table->foreign('statusbsmt_id')
                    ->references('id')
                    ->on('statusbsmt')
                    ->onDelete('set null');
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
