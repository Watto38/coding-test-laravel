<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('items')->insert([
                'order_id' => rand(1, 30),
                'name' => $faker->word,
                'quantity' => rand(1, 10),
                'price' => $faker->randomFloat(2, 1, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
