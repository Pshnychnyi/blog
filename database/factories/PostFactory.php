<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'content' => $this->faker->sentence(rand(10, 15), true),
            'category_id' => Category::get()->random()->id,
            'preview_image' => $this->faker->imageUrl(632, 530, 'animals', true),
            'main_image' => $this->faker->imageUrl(1200, 920, 'animals', true)
        ];
    }
}
