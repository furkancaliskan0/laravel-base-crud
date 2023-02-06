<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Saint>
 */
class SaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => fake()->firstName(),
            'luogo_di_nascita' => fake()->city(),
            'data_benedizione' => fake()->dateTimeAD(),
            'numero_miracoli' => fake()->numberBetween(5, 1000),
        ];
    }
}