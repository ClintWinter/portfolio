<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $published = $this->faker->boolean(50);

        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraphs(8, true),
            'cover_img_url' => $this->faker->url,
            'published' => $published,
            'published_at' => $published ? now() : null
        ];
    }
}
