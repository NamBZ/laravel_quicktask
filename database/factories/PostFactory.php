<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\User;

class PostFactory extends Factory
{

    /**
     * The name of the post's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'content' => $this->faker->paragraph(),
            'description' => $title,
            'keyword' => $title,
            'slug' => Str::slug($title, '-'),
            'user_id' => User::first()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
