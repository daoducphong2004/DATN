<?php

namespace Database\Seeders;

use App\Models\chapter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $validEpisodeIds = DB::table('episodes')->pluck('id')->toArray();
        $validUserIds = DB::table('users')->pluck('id')->toArray();

        for($i = 0; $i <6; $i++){
            chapter::query()->create([
                'slug' => $faker->slug,
                'title' => $faker->sentence(3),
                'content' => $faker->paragraph,
                'episode_id' => $faker->randomElement($validEpisodeIds),
                'user_id'  => $faker->randomElement($validUserIds),
            ]);
        }
    }
}
