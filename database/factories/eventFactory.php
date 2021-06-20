<?php

namespace Database\Factories;

use App\Models\event;
use Illuminate\Database\Eloquent\Factories\Factory;

class eventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence($nbWords = 5, $variableNbWords = true),
            'subtitle'=> $this->faker->sentence,
            'date'=> $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'city'=>$this->faker->city,
            'province'=>$this->faker->state,
            'description'=>$this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'organizer_name'=>$this->faker->company,
            'organizer_phone'=>$this->faker->e164PhoneNumber,
            'organizer_email'=>$this->faker->companyEmail,
            'organizer_website'=>$this->faker->domainName,
            'active'=>$this->faker->randomDigit
        ];
    }
}
