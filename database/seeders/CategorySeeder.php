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
            ['name' => 'Абонемент', 'slug' => 'abonement',],
            ['name' => 'Пробное занятие', 'slug' => 'trial'],
            ['name' => 'Разовое занятие', 'slug' => 'one-time']
        ];

        Category::insert($categories);

        echo "Добавлены категории\n";
    }
}
