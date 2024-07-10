<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = bcrypt('password');
        $list = [
            [
                'name' => 'Abdul Rahman',
                'email' => 'abdulrahman@gmail.com',
                'password' => $password,
            ],
            [
                'name' => 'Robin',
                'email' => 'robin@gmail.com',
                'password' => $password,
            ],
            [
                'name' => 'Jobe',
                'email' => 'jobe@gmail.com',
                'password' => $password,
            ],
            [
                'name' => 'Boy Sandi',
                'email' => 'boysandi@gmail.com',
                'password' => $password,
            ],
            [
                'name' => 'Abdul Muin',
                'email' => 'abdulmuin@gmail.com',
                'password' => $password,
            ],
        ];
        User::insert($list);
    }
}
