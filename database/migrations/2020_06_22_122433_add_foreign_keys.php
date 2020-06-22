<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task', function(Blueprint $table){
            $table -> foreign('employee_id', 'ref_employee') -> references('id') -> on('employee');
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task', function(Blueprint $table){
            $table -> dropForeign('ref_employee');
        } );
    }
}
