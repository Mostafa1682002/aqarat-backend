<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'عمائر', 'image' => 'uploads/categories/cat-1.png'],
            ['name' => 'شقه', 'image' => 'uploads/categories/cat-2.png'],
            ['name' => 'منازل', 'image' => 'uploads/categories/cat-3.png'],
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
