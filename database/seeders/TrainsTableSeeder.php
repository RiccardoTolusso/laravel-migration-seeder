<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Testing\Fakes\Fake;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 30; $i++) {
            // GENERO DUE DATE E LE ORDINO
            $time[0] = fake()->dateTimeBetween('-1 week', '+1 week');
            $time[1] = fake()->dateTimeBetween('-1 week', '+1 week');
            sort($time);

            $train = new Train();
            $train->company = fake()->company();
            $train->from = fake()->city();
            $train->destination = fake()->city();
            $train->start_time = $time[0];
            $train->stop_time = $time[1];
            $train->code = fake()->bothify('TR??###');;
            $train->wagons = fake()->numberBetween(4, 12);
            $train->on_time = fake()->boolean(70);
            $train->deleted = fake()->boolean(30);
            $train->save();
        }
    }
}
