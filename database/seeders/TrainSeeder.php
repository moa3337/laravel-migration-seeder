<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train;
        $train->company_name = "ferrovie del paese";
        $train->departure_station_name = "Milano centrale";
        $train->arrival_station_name = "Torini porta nuova";
        $train->departure_time = 08.50;
        $train->arrival_time = 11.05;
        $train->train_code = "tfdp1055lkdns";
        $train->carriage_code = "75ad";
        $train->on_time = true;
        $train->not_on_time = true;
        $train->save();
    }
}
