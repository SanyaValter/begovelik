<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
       $categories = [
            ['name' => 'Абонемент', 'slug' => 'abonement','password' => 'admin11'],
            ['name' => 'Пробное занятие', 'slug' => 'trial','password' => 'admin11'],
            ['name' => 'Разовое занятие', 'slug' => 'one-time','password' => 'admin11']
        ];

        Category::insert($categories);

        echo "Добавлены категории\n";
    }
}
