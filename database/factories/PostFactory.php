<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence,
            'picture'=>'https://via:placeholder.com/1000',
            'content'=>$this->faker->paragraph,
            'created_at'=>now()->format('Y-m-d')
        ];
    }
}
