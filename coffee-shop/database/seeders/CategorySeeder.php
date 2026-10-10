<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $remaining = max(0, 1000 - Category::count());

        Category::factory()
            ->count($remaining)
            ->create();
    }
}