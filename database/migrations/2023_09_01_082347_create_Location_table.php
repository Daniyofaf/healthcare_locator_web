<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Location', function (Blueprint $table) {
            $table->increments('l_id');
            $table->integer('h_id')->index()->nullable();
            $table->integer('c_id')->index()->nullable();
            $table->integer('sh_id')->index()->nullable();
            $table->integer('sc_id')->index()->nullable();
            $table->string('region')->nullable();
            $table->string('zone')->nullable();
            $table->string('wereda')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
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
        Schema::dropIfExists('Location');
    }
}
