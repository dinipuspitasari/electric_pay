<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Dini Puspitasari',
                'email' => 'admin@gmail.com',
                'password'=> bcrypt('admin123'),
                'id_level'=> 1,
            ],
            [
                'name' => 'Robot',
                'email' => 'robot@gmail.com',
                'password'=> bcrypt('user123'),
                'id_level'=> 2,
            ],
        ];

        User::insert($users);
    }
}
