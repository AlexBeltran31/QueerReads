<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Lesbian Fiction',
            'Gay Fiction',
            'Queer Autobiography',
            'LGBTQ+ History',
            'Trans Studies',
            'Queer Poetry'
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['name' => $category],
                ['name' => $category]
            );
        }
    }
}
