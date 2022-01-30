<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++) {
            $_tag = new Tag();
            $_tag->name = $faker->word();
            $_tag->save();
        }
    }
}