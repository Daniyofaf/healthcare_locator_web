<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Hospital', function (Blueprint $table) {
            $table->increments('h_id');
            $table->string('h_name')->nullable();
            $table->string('Region')->nullable();
            $table->string('Zone')->nullable();
            $table->string('Wereda')->nullable();
            $table->string('Service')->nullable();
            // $table->string('Status')->nullable();
            $table->string('Latitude')->nullable();
            $table->string('Longitude')->nullable();
            // $table->string('st_id')->index()->nullable();
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
        Schema::dropIfExists('Hospital');
    }
}
