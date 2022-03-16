<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Văn học";
        $category->description = "Các bài post về văn học Việt Nam";
        $category->save();

        $category = new Category();
        $category->name = "Chính trị";
        $category->description = "Các bài post về chính trị";
        $category->save();

        $category = new Category();
        $category->name = "Khoa học";
        $category->description = "Các bài post về khoa học";
        $category->save();
    }
}
