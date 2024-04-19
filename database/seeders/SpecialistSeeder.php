<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\Specialist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Specialist::factory()
            ->has(Review::factory()->count(1000))
            ->count(1000)
            ->create();
    }
}
