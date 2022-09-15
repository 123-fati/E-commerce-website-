<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        reservation::factory()
        ->count(3)
        ->create();
    }
}
