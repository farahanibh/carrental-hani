<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments ('id'); 
            $table->date('datePickup');
            $table->date('dateReturn');
            $table->string('location');
            $table->string('duration');
            $table->decimal('totalPrice',10,2);
            $table->unsignedInteger ('userID')->nullable();
            $table->unsignedInteger ('carID')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
