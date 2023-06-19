<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $login = 'admin';
        $password = 'admin11';

        User::create(compact('login', 'password'));

        echo "Администратор создан.\nEmail: $login\nПароль: $password\n";
    }
}
