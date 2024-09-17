<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            $title = $faker->sentence(3);
            $validGroupIds = DB::table('groups')->pluck('id')->toArray();

            DB::table('books')->insert([
                'title' => $faker->sentence(3),
                'slug' => Str::slug($title),
               'author' => $faker->name,
                'view' => $faker->numberBetween(100, 10000),
                'like' => $faker->numberBetween(10, 1000),
                'painter' => $faker->name,
                'book_path' => $faker->url,
                'description' => $faker->paragraph,
                'note' => $faker->sentence,
                'is_VIP' => $faker->boolean,
                'status' => $faker->randomElement(['ongoing', 'completed']),
                'adult' => $faker->boolean,
                'type' => $faker->randomElement([1,2,3]),
                'group_id' => $faker->randomElement($validGroupIds),

            ]);
        }
    }
}
