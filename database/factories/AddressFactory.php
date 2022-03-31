<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Buyer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'name' => $this->faker->text(20),
            'city' => $this->faker->city(),
            'street_or_district' => $this->faker->streetName(),
            'house' => $this->faker->buildingNumber(),
            'floor' => $this->faker->numerify('##'),
            'apartment' => $this->faker->numerify('###'),
            'code' => $this->faker->numerify('####K####'),
            'buyer_id' => Buyer::all()->random()->id,
            'addition_date' => $this->faker->dateTime('now')
        ];
    }
}
