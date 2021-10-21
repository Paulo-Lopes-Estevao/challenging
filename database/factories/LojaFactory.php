<?php

namespace Database\Factories;

use App\Models\Loja;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LojaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Loja::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nome" => $this->faker->name(),
            "email" => $this->faker->unique()->safeEmail(),
            "created_at" => now(),
            "updated_at" => now()
        ];
    }
}
