<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrefectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prefectures = [
            '北海道',
            '',
        ];

        foreach ($prefectures as $prefecture) {
            DB::table('prefectures')->create([
                'name' => $prefecture[0],
            ]);
        }
    }
}
