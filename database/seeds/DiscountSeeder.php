<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DiscountSeeder extends Seeder
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
            DB::table('discount')->insert([
              'discount_code' => $faker->ean8,
              'discount_percentage' => $faker->randomNumber(2)
            ]);
        }
    }
}
