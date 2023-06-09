<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
          // generati di default
          $table->id();
          $table->timestamps();
          // aggiunti successivamente
          $table->string('slug', 50)->unique();
          $table->string('agency', 30);
          $table->string('departure_station', 30);
          $table->string('arrival_station', 30);
          $table->string('departure_time', 5);
          $table->string('arrival_time', 5);
          $table->string('train_code', 5)->unique();
          $table->tinyInteger('number_of_carriages')->unsigned()->default(0);
          $table->boolean('in_time')->nullable();
          $table->boolean('deleted')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
