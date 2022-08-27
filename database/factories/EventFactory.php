<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name;

        return [
            'name' => $name,
            'slug' => str($name)->slug(),
            'location' => $this->faker->city,
            'type' => $this->faker->numberBetween(1, 2),
            'amount' => $this->faker->randomNumber(5),
            'event_date' => $this->faker->dateTime(),
            'note' => $this->faker->text,
            'rating' => $this->faker->randomNumber(5),
        ];
    }
}
