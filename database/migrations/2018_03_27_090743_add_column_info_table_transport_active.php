<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnInfoTableTransportActive extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transport_active', function (Blueprint $table) {
            $table->string('info')->after('state_id');
            
    });         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transport_active', function (Blueprint $table) {
            $table->dropColumn('info');
            
    });     
    }
}
