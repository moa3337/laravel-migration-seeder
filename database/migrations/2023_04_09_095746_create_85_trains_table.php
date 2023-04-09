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
        Schema::create('85_trains', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 25);
            $table->string('departure_station_name', 35)->unique();
            $table->string('arrival_station_name', 35);
            $table->integer('departure_time')->useCurrent();
            $table->integer('arrival_time')->useCurrent();
            $table->string('train_code', 13)->unique();
            $table->string('carriage_code', 4);
            $table->boolean('on_time');
            $table->boolean('not_on_time');
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
        Schema::dropIfExists('85_trains');
    }
};
