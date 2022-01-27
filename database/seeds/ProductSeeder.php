<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 6; $i++) {
            $_product = new Product();
            $_product->title = $faker->sentence();
            $_product->image = $faker->imageUrl();
            $_product->size = $faker->word();
            $_product->material = $faker->word();
            $_product->price = $faker->numberBetween(15, 35);
            $_product->data = $faker->date();
            $_product->description = $faker->sentence();
            $_product->title = $faker->sentence();
            $_product->save();
        }
    }
}