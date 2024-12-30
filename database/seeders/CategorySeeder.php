<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(
            [
                [
                    'name' => 'Mẫu chữ cổ điển',
                    'description' => 'Phong cách cổ điển, phù hợp để viết thư hoặc thiệp mời.',
                    'thumbnail' => '',
                ],
                [
                    'name' => 'Mẫu chữ hiện đại',
                    'description' => 'Phong cách hiện đại, đơn giản nhưng không kém phần tinh tế.',
                    'thumbnail' => '',
                ],
                [
                    'name' => 'Mẫu chữ sáng tạo',
                    'description' => 'Phong cách độc đáo, thích hợp cho các dự án nghệ thuật.',
                    'thumbnail' => '',
                ],
            ]
        );
    }
}
