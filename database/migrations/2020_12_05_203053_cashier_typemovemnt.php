<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CashierTypemovemnt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashier_movement_type', function (Blueprint $table)
        {
            $table->integer('cashier_id')->unsigned();
            $table->foreign('cashier_id')->references('id')->on('cashiers');

            $table->integer('movement_type_id')->unsigned();
            $table->foreign('movement_type_id')->references('id')->on('movement_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cashier_movement_type');
    }

}
