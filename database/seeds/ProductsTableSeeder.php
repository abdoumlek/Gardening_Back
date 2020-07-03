<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'id' => $faker->randomNumber($nbDigits = NULL, $strict = false),
                'name' => $faker->sentence,
                'description' => $faker->paragraph,
                'photo' => $faker->imageUrl($width = 640, $height = 480),
                'sellingPrice' => $faker->randomNumber($nbDigits = 3, $strict = false),
            ]);
        }
    }
}
