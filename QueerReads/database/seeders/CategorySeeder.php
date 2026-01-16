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
            'Queer Fiction',
            'LGBTQ+ History',
            'Trans Studies',
            'Feminist Theory',
            'Queer Poetry'
        ];

        foreach ($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}
