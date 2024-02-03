<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            "A1",
            "A2",
            "B1",
            "B2",
            "C1",
            "C2",
        ];

        foreach ($levels as $level) {
            \App\Models\Level::create([
                "name" => $level,
            ]);
        }
    }
}
