<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class MylaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function UniqueRandomNumbersWithinRange($min, $max, $quantity)
    {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }

    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 10;
        $carID = $this->UniqueRandomNumbersWithinRange(1, 10, 10);
        $colorID = $this->UniqueRandomNumbersWithinRange(1, 10, 10);
        //

        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('categories')->insert([
        //         'name' => $faker->name,
        //         'created_at'=>date("Y-m-d H:i:s")
        //     ]);
        // }

        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('cars')->insert([
        //         'name' => $faker->name,
        //         'price' => $faker->randomNumber(2),
        //         'created_at'=>date("Y-m-d H:i:s")
        //     ]);
        // }

        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('colors')->insert([
        //         'name' => $faker->colorName,
        //         'created_at'=>date("Y-m-d H:i:s")
        //     ]);
        // }

        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('car_colors')->insert([
        //         'car_id' => rand(1,10),
        //         'color_id' => rand(1,10),
        //         'car_id' => $carID[$i],
        //         'color_id' => $colorID[$i],
        //         'created_at'=>date("Y-m-d H:i:s")
        //     ]);
        // }

        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('admins')->insert([
        //         'name' => 'user'.$i,
        //         'email' => $faker->unique()->safeEmail,
        //         'password' => Hash::make('123123'),
        //         'created_at'=>date("Y-m-d H:i:s")
        //     ]);
        // }
        DB::table('admins')->insert([
            'name' => 'onliva',
            'email' => 'luongthongvfu@gmail.com',
            'password' => Hash::make('123123'),
            'created_at'=>date("Y-m-d H:i:s")
        ]);


    }
}
