<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnCustomerTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('transports', function (Blueprint $table) {
            $table->integer('customer_id')->after('user_id')->unsigned()->nullable();
            
            $table->foreign('customer_id')
                    ->references('id')
                    ->on('customers')
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
            $table->dropColumn('customer_id');
            $table->dropForeign('[customer_id]');
});  
    }
}
