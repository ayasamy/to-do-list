<?php

namespace Database\Factories;

use App\Models\Step;
use Illuminate\Database\Eloquent\Factories\Factory;

class StepFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Step::class;

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
             'dolist_id' =>1,
            //
        ];
    }
}
