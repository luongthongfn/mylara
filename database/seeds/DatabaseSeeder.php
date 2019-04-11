<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MylaraSeeder::class);
        $this->call(categoryTable::class);
        $this->call(productTable::class);
    }
}

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
        $limit = 11;
        $carID = $this->UniqueRandomNumbersWithinRange(1, 10, 10);
        $colorID = $this->UniqueRandomNumbersWithinRange(1, 10, 10);
        //

        // for ($i = 1; $i < $limit; $i++) {
        //     DB::table('categories')->insert([
        //         'name' => $faker->name,
        //         'created_at'=>date("Y-m-d H:i:s")
        //     ]);
        // }

        // for ($i = 1; $i < $limit; $i++) {
        //     DB::table('cars')->insert([
        //         'name' => $faker->name,
        //         'price' => $faker->randomNumber(2),
        //         'created_at'=>date("Y-m-d H:i:s")
        //     ]);
        // }

        // for ($i = 1; $i < $limit; $i++) {
        //     DB::table('colors')->insert([
        //         'name' => $faker->colorName,
        //         'created_at'=>date("Y-m-d H:i:s")
        //     ]);
        // }

        // for ($i = 1; $i < $limit; $i++) {
        //     DB::table('car_colors')->insert([
        //         'car_id' => rand(1,10),
        //         'color_id' => rand(1,10),
        //         'car_id' => $carID[$i],
        //         'color_id' => $colorID[$i],
        //         'created_at'=>date("Y-m-d H:i:s")
        //     ]);
        // }

        // for ($i = 1; $i < $limit; $i++) {
        //     DB::table('admins')->insert([
        //         'name' => 'user'.$i,
        //         'email' => $faker->unique()->safeEmail,
        //         'password' => Hash::make('123123'),
        //         'created_at'=>date("Y-m-d H:i:s")
        //     ]);
        // }
        DB::table('admins')->insert([
            'name' => '123123',
            'email' => 'luongthongvfu@gmail.com',
            'password' => Hash::make('123123'),
            'created_at'=>date("Y-m-d H:i:s")
        ]);


    }
}

class categoryTable extends Seeder
{
    public function UniqueRandomNumbersWithinRange($min, $max, $quantity)
    {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }

    public function run()
    {
        // $faker = Faker\Factory::create();
        $limit = 10;

        for ($i = 1; $i < $limit; $i++) {
            DB::table('categories')->insert([
                'name' => 'cate'.$i,
                'alias' => 'cate'.$i,
                'order' => 0,
                'keywords' => 'cate'.$i.' keywords',
                'description' => 'cate'.$i.' description',
                'created_at'=>date("Y-m-d H:i:s")
            ]);
        }

    }
}
class productTable extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 10;

        for ($i = 1; $i < $limit; $i++) {
            DB::table('products')->insert([
                'name' => 'product'.$i,
                'alias' => 'product'.$i,
                'intro'=> $faker->text(20),
                'content' => $faker->text(10),
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'keywords' => 'cate'.$i.' keywords',
                'description' => 'cate'.$i.' description',
                'price'=> $faker->numberBetween(1000),
                'cate_id'=> 1,
                'user_id'=> 1,
                'created_at'=>date("Y-m-d H:i:s")
            ]);
        }

    }
}

