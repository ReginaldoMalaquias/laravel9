<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignkeyInvoicesUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            //
            Schema::table('invoices', function (Blueprint $table) {
                $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('CASCADE');
            });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
            //
            $table->dropForeign('users_id');
        
    }
}
