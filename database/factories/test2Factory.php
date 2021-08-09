<?php

namespace Database\Factories;

use App\Models\test;
use App\Models\test2;
use Illuminate\Database\Eloquent\Factories\Factory;

class test2Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = test2::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'test1_id' => test::factory(),
            't2Name' => $this->faker->name(),
            't2Address' => $this->faker->unique()->address(),
            't2Email' => $this->faker->unique()->safeEmail(),
            '2active' => $this->faker->boolean(50),
        ];
    }
}
