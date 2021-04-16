<?php

namespace Database\Factories;

use App\Models\DoList;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DoList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'name' => $this->faker->colorName,
             'description' => null,
            'order' => random_int(1, 20),
        ];
    }
}
