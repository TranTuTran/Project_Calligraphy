<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('levels')->insert(
            [
                [
                    'name' => 'Cơ bản',
                    'description' => 'Học các nét cơ bản và làm quen với bút lông, bút máy.',
                ],
                [
                    'name' => 'Nâng cao',
                    'description' => 'Nắm vững các kỹ thuật nâng cao và phát triển phong cách riêng.',
                ],
                [
                    'name' => 'Chuyên sâu',
                    'description' => 'Trở thành chuyên gia với các bài học chi tiết từ các nghệ nhân.',
                ],
            ]
        );
    }
}
