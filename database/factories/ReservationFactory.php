<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'id_client' => $this->faker->unique(true)->numberBetween(1,3),
            'id_partenaire' => $this->faker->unique(true)->numberBetween(1,3),
            'id_annonce' => $this->faker->unique(true)->numberBetween(1,3),
            'periode' => $this->faker->unique(true)->numberBetween(1,3),
            'date_reservation' => $this->faker->date(),


        ];
    }
}
