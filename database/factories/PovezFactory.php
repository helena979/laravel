<?php

namespace Database\Factories;

use App\Models\Knjiga;
use App\Models\Povez;
use Illuminate\Database\Eloquent\Factories\Factory;

class PovezFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Povez::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'knjiga_id' => $this->faker->numberBetween(1, Knjiga::query()->count())
        ];
    }
}
