<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportActiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport_active', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned()->nullable();
            $table->integer('transport_id')->unsigned()->nullable();
            $table->integer('state_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('customer_id')
                    ->references('id')
                    ->on('customers')
                    ->onDelete('set null');
            $table->foreign('transport_id')
                    ->references('id')
                    ->on('transports');
            $table->foreign('state_id')
                    ->references('id')
                    ->on('states');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transport_active');
        
    }
}
