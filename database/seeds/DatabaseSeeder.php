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
        // $this->call(categoryTable::class);
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
        $faker = Faker\Factory::create();
        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('categories')->insert([
                'name' => $faker->name,
                'alias' => $faker->name,
                'order' => $faker->name,
                'created_at'=>date("Y-m-d H:i:s")
            ]);
        }

    }
}

