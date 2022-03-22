<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('city');
            $table->string('street_or_district');
            $table->string('house');
            $table->string('floor')->nullable();
            $table->string('apartment')->nullable();
            $table->string('code')->nullable();
            $table->integer('buyer_id');

            $table->foreignId('buyer_id')->references('id')->on('buyers');

            $table->timestamp();
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
