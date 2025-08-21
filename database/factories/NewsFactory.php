<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    public function definition(): array
    {
        $title = $this->faker->realText(40);
        return [
            'title'        => $title,
            'slug'         => Str::slug($title) . '-' . Str::random(5),
            'teaser'       => $this->faker->realText(100),
            'image'        => null, // или 'news/placeholder.jpg'
            'body'         => '<p>'.$this->faker->paragraphs(5, true).'</p>',
            'is_active'    => true,
            'published_at' => $this->faker->dateTimeBetween('-30 days', 'now'),
        ];
    }
}
