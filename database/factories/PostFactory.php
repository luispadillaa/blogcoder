<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
    public function definition(): array
    {
        return [

            #Cada vez que se crea un post se le asignara un user con su id
            'user_id' => User::factory(),

            #titulo aleatorio
            'title' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
            'slug' => $this->faker->slug(3),
            'body' => $this->faker->paragraph(10),
            'published_at' => $this->faker->dateTimeBetween('-1 Week', '+1 week'),
            'featured' => $this->faker->boolean(10)
        ];
    }
}
