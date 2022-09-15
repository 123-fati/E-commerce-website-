<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\annonce;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        annonce::factory()
        ->count(3)
        ->create();
    }
}
