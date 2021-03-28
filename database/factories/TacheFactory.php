<?php

namespace Database\Factories;

use App\Models\Tache;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class TacheFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tache::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
         return [
         'expiration' => $this->faker->dateTimeInInterval('-6 months','+ 180 days'),
         'categorie' => serialize($this->faker->randomElements(array('Urgent', 'A Faire', 'Optionnel'))),
         'description' => $this->faker->text(),
         'accomplie' => $this->faker->randomElement(array('O', 'N')),
         'created_at' => $createAt =  $this->faker->dateTimeInInterval('-6 months','+ 180 days'),  
         'updated_at' => $this->faker->dateTimeInInterval($createAt, $createAt->diff(new DateTime('now'))->format("%R%a days"))
         ];
         }
        
}
