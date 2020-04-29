<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++){
            DB::table('product')->insert([
              'name' => $faker->name,
              'image' => $faker->imageUrl($width = 640, $height = 480), // 'http://lorempixel.com/640/480/'
              'price' => $faker->randomNumber(2),
            ]);
        }
    }
}
