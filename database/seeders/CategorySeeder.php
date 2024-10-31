<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['content' => 'Tất cả', 'color' => '', 'slug' => 'tat-ca'],
            ['content' => 'Thông báo', 'color' => '#eb1d57', 'slug' => 'thong-bao'],
            ['content' => 'Tin tức', 'color' => '#e01bb4', 'slug' => 'tin-tuc'],
            ['content' => 'Hỏi đáp', 'color' => '#252eef', 'slug' => 'hoi-dap'],
            ['content' => 'Đánh giá', 'color' => '#28e1e8', 'slug' => 'danh-gia'],
            ['content' => 'Thảo luận', 'color' => '#1ee865', 'slug' => 'thao-luan'],
        ]);
    }
}
