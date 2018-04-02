<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnModelNameIdTableTransport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transports', function (Blueprint $table) {
            $table->dropColumn('model');
            $table->integer('model_name_id')
                   ->after('user_id')
                   ->unsigned()
                   ->nullable();
            $table->foreign('model_name_id')
                  ->references('id')
                  ->on('model_transport')
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
        Schema::table('transports', function (Blueprint $table) {
            
            $table->dropForeign('[model_name_id]');	
            $table->dropColumn('model_name_id');
            $table->string('model',10)->after('user_id');
        });
    }
}
