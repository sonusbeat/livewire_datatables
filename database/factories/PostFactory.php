<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
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
        DB::table('posts')->truncate();

        static $count = 1;

        return [
            'title' => str_replace('.', '', $this->faker->sentence(3)),
            'content' => $this->faker->sentence(8),
            'image' => strval($count++).".jpg",
        ];
    }
}
