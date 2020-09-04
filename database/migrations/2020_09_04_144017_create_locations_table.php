<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->smallincrements('id');
            $table->string('name', 150);
            $table->enum('type', ['country', 'region' , 'city' , 'subregion', 'airport', 'terminal']);
            $table->string('code', 4)->nullable();
            $table->json('details')->nullable();
            $table->decimal('lat',11,8)->nullable();
            $table->decimal('lon',11,8)->nullable();
            $table->nestedSet();
            $table->tinyInteger('sort_order')->default(99);
            $table->unique(['name', 'type']);
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
        Schema::drop('locations');
    }
}
