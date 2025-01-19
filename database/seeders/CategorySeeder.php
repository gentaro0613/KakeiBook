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
        Category::create(['name' => '食費']);
        Category::create(['name' => '日用品']);
        Category::create(['name' => '衣服']);
        Category::create(['name' => '美容']);
        Category::create(['name' => '交際費']);
        Category::create(['name' => '光熱費']);
        Category::create(['name' => '家賃']);
        Category::create(['name' => '通信費']);
        Category::create(['name' => '医療費']);
        Category::create(['name' => '資産運用収支']);
        Category::create(['name' => '交通費']);
        Category::create(['name' => 'その他収支']);
    }
}
