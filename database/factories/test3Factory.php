<?php

namespace Database\Factories;

use App\Models\test2;
use App\Models\test3;
use Illuminate\Database\Eloquent\Factories\Factory;

class test3Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = test3::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'test2_id' => test2::factory(),
            't3Name' => $this->faker->name(),
            't3Address' => $this->faker->unique()->address(),
            't3Email' => $this->faker->unique()->safeEmail(),
            '3active' => $this->faker->boolean(50),
        ];
    }
}
