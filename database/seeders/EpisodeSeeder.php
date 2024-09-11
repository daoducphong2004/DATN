<?php

namespace Database\Seeders;

use App\Models\episode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $faker = Faker::create();
        $validBookIds = DB::table('books')->pluck('id')->toArray();


        for($i = 0; $i <6; $i++){
            episode::query()->create([
                'slug' => $faker->slug,
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph,
                'episode_path' => $faker->filePath(),
                'book_id' => $faker->randomElement($validBookIds),
            ]);
        }
    }
}
