<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name', 50);
            $table->tinyInteger('car_type_id')->unsigned();
            $table->tinyInteger('max_pax')->unsigned()->default(3);
            $table->tinyInteger('max_luggage')->unsigned()->default(2);
            $table->string('description', 50)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('car_type_id')->references('id')->on('car_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cars');
    }
}
