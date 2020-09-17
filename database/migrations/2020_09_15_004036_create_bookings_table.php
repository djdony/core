<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('from')->constrained('locations');
            $table->foreignId('to')->constrained('locations');
            $table->foreignId('customer_id')->constrained('customers');
            $table->date('date');
            $table->time('time');
            $table->string('flight', 10);
            $table->tinyinteger('type');
            $table->string('info', 100);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bookings');
    }
}
