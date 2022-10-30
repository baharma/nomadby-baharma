<?php

use App\TravelPackge;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class TravelPaket extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker\Factory::create();
        // for ($i = 0; $i < 10; $i++) {
        //     TravelPackge::create([
        //         'title' => $faker,
        //         'slug' => $faker,
        //         'location' => $faker,
        //         'about' => $faker,
        //         'featured_event' => $faker,
        //         'language' => $faker,
        //         'foods' => $faker,
        //         'departure_date' => Carbon::create('2000', '01', '01'),
        //         'duration' => $faker,
        //         'type' => $faker,
        //         'price' => $faker
        //     ]);
        // }
    }
}
