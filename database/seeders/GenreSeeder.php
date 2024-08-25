<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            ['id' => 1, 'name' => 'Action', 'slug' => 'action'],
            ['id' => 49, 'name' => 'Adapted to Anime', 'slug' => 'adapted-to-anime'],
            ['id' => 51, 'name' => 'Adapted to Drama CD', 'slug' => 'adapted-to-drama-cd'],
            ['id' => 50, 'name' => 'Adapted to Manga', 'slug' => 'adapted-to-manga'],
            ['id' => 28, 'name' => 'Adult', 'slug' => 'adult'],
            ['id' => 2, 'name' => 'Adventure', 'slug' => 'adventure'],
            ['id' => 52, 'name' => 'Age Gap', 'slug' => 'age-gap'],
            ['id' => 60, 'name' => 'Boys Love', 'slug' => 'boys-love'],
            ['id' => 54, 'name' => 'Character Growth', 'slug' => 'character-growth'],
            ['id' => 39, 'name' => 'Chinese Novel', 'slug' => 'chinese-novel'],
            ['id' => 3, 'name' => 'Comedy', 'slug' => 'comedy'],
            ['id' => 43, 'name' => 'Cooking', 'slug' => 'cooking'],
            ['id' => 56, 'name' => 'Different Social Status', 'slug' => 'different-social-status'],
            ['id' => 4, 'name' => 'Drama', 'slug' => 'drama'],
            ['id' => 5, 'name' => 'Ecchi', 'slug' => 'ecchi'],
            ['id' => 40, 'name' => 'English Novel', 'slug' => 'english-novel'],
            ['id' => 6, 'name' => 'Fantasy', 'slug' => 'fantasy'],
            ['id' => 59, 'name' => 'Female Protagonist', 'slug' => 'female-protagonist'],
            ['id' => 45, 'name' => 'Game', 'slug' => 'game'],
            ['id' => 7, 'name' => 'Gender Bender', 'slug' => 'gender-bender'],
            ['id' => 8, 'name' => 'Harem', 'slug' => 'harem'],
            ['id' => 35, 'name' => 'Historical', 'slug' => 'historical'],
            ['id' => 9, 'name' => 'Horror', 'slug' => 'horror'],
            ['id' => 10, 'name' => 'Incest', 'slug' => 'incest'],
            ['id' => 30, 'name' => 'Isekai', 'slug' => 'isekai'],
            ['id' => 33, 'name' => 'Josei', 'slug' => 'josei'],
            ['id' => 34, 'name' => 'Korean Novel', 'slug' => 'korean-novel'],
            ['id' => 44, 'name' => 'Magic', 'slug' => 'magic'],
            ['id' => 37, 'name' => 'Martial Arts', 'slug' => 'martial-arts'],
            ['id' => 27, 'name' => 'Mature', 'slug' => 'mature'],
            ['id' => 11, 'name' => 'Mecha', 'slug' => 'mecha'],
            ['id' => 36, 'name' => 'Military', 'slug' => 'military'],
            ['id' => 58, 'name' => 'Misunderstanding', 'slug' => 'misunderstanding'],
            ['id' => 12, 'name' => 'Mystery', 'slug' => 'mystery'],
            ['id' => 32, 'name' => 'Netorare', 'slug' => 'netorare'],
            ['id' => 38, 'name' => 'One shot', 'slug' => 'one-shot'],
            ['id' => 46, 'name' => 'Otome Game', 'slug' => 'otome-game'],
            ['id' => 61, 'name' => 'Parody', 'slug' => 'parody'],
            ['id' => 23, 'name' => 'Psychological', 'slug' => 'psychological'],
            ['id' => 47, 'name' => 'Reverse Harem', 'slug' => 'reverse-harem'],
            ['id' => 22, 'name' => 'Romance', 'slug' => 'romance'],
            ['id' => 13, 'name' => 'School Life', 'slug' => 'school-life'],
            ['id' => 14, 'name' => 'Science Fiction', 'slug' => 'science-fiction'],
            ['id' => 31, 'name' => 'Seinen', 'slug' => 'seinen'],
            ['id' => 15, 'name' => 'Shoujo', 'slug' => 'shoujo'],
            ['id' => 16, 'name' => 'Shoujo ai', 'slug' => 'shoujo-ai'],
            ['id' => 26, 'name' => 'Shounen', 'slug' => 'shounen'],
            ['id' => 17, 'name' => 'Shounen ai', 'slug' => 'shounen-ai'],
            ['id' => 18, 'name' => 'Slice of Life', 'slug' => 'slice-of-life'],
            ['id' => 55, 'name' => 'Slow Life', 'slug' => 'slow-life'],
            ['id' => 19, 'name' => 'Sports', 'slug' => 'sports'],
            ['id' => 24, 'name' => 'Super Power', 'slug' => 'super-power'],
            ['id' => 20, 'name' => 'Supernatural', 'slug' => 'supernatural'],
            ['id' => 25, 'name' => 'Suspense', 'slug' => 'suspense'],
            ['id' => 21, 'name' => 'Tragedy', 'slug' => 'tragedy'],
            ['id' => 53, 'name' => 'Wars', 'slug' => 'wars'],
            ['id' => 29, 'name' => 'Web Novel', 'slug' => 'web-novel'],
            ['id' => 57, 'name' => 'Workplace', 'slug' => 'workplace'],
            ['id' => 48, 'name' => 'Yuri', 'slug' => 'yuri'],
        ]);
    }
}
