<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnnonceFactory extends Factory
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
        

            'description' => $this->faker->text(),
            'prix' => $this->faker->unique(true)->numberBetween(1,3),
            'periode' => $this->faker->unique(true)->numberBetween(1,3),
            'ville' => $this->faker->text(),
            'id_partenaire' => $this->faker->unique(true)->numberBetween(1,3),
            'categorie_objet' => $this->faker->text(),
            'nom_objet' => $this->faker->text(),
            'status_objet' => $this->faker->text(),
            'image' => $this->faker->text(),
            'etat_objet' => $this->faker->text(),
            


           


        ];
    }
}
