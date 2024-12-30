<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class NationalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nationals')->insert(
            [
                [
                    'name' => 'Việt Nam',
                    'english_name' => 'Vietnam',
                    'slug' => 'vi',
                    'language_code' => 'vi',
                ],
                [
                    'name' => 'Trung Quốc',
                    'english_name' => 'China',
                    'slug' => 'zh',
                    'language_code' => 'zh',
                ],
                [
                    'name' => 'Ấn Độ',
                    'english_name' => 'India',
                    'slug' => 'gu',
                    'language_code' => 'gu',
                ],
            ]
        );
    }
}
