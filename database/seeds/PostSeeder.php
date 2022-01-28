<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $_post = new Post();
            $_post->title = $faker->sentence();
            $_post->image = $faker->imageUrl();
            $_post->text = $faker->sentence();
            $_post->likes = $faker->numberBetween(500, 2850);
            $_post->save();
        }
    }
}