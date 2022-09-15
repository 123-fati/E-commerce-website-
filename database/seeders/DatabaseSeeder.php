<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(userSeeders::class);
          $this->call(ReservationSeeder::class);
         $this->call(PartenaireSeeder::class);
         $this->call(AnnonceSeeder::class);
         $this->call(ObjectSeeder::class);
    }
}
