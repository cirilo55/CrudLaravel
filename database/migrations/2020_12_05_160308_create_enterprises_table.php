<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnterprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->integer('cnpj');
            $table->string('fantasy_name');
            $table->timestamps();

            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('addresses');

        });
    }

    /**['id', 'company_name', 'cnpj', 'fantasy_name'
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enterprises');
    }
}
