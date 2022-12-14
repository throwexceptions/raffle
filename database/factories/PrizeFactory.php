<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prize>
 */
class PrizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'bet'=>$this->faker->randomFloat(),
            'code'=>$this->faker->Word,
            'is_published'=>$this->faker->Word,
            'description'=>$this->faker->paragraph
        ];
    }
}
