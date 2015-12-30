<?php

use App\Post;
use Faker\Generator;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /** @var Generator */
    private $faker;

    /**
     * PostTableSeeder constructor.
     *
     * @param Generator $faker
     */
    public function __construct(Generator $faker)
    {
        $this->faker = $faker;
    }

    public function run()
    {
        collect(range(1, 10))->each(function ($index) {
            Post::create([
                'user_id' => $index,
                'title'   => $this->faker->sentence,
                'content' => $this->faker->paragraph,
            ]);
        });
    }
}
