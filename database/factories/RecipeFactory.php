<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => __('Recette n° :number', ['number' => rand()]),
            'description' => fake()->paragraph(),
            'preparation_time' => rand(1, 20),
            'rest_time' => rand(0, 15),
            'cooking_time' => rand(0, 45),
            'ingredients' => fake()->paragraph(),
            'steps' => fake()->paragraph(),
            'allergens' => fake()->randomElements(['fruits à coque', 'lait', 'soja']),
            'diets' => fake()->randomElements(['végétarien', 'flexitarien', 'sans lactose']),
            'public' => fake()->boolean()

        ];
    }
}
