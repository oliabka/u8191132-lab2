<?php

namespace Database\Factories;

use App\Models\Buyer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buyer>
 */
class BuyerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Buyer::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(null),
            'blocked' => $this->faker->boolean(30),
            'surname' => $this->faker->lastName(),
            'phone' => $this->faker->unique(false)->e164PhoneNumber(),
            'email' => $this->faker->unique(false)->email(),
            'registration_date' => $this->faker->dateTime('now')
        ];
    }
}
