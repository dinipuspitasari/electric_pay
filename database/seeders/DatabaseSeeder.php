<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Dini Puspitasari',
        //     'email' => 'dinipuspitasari03@gmail.com',
        //     'password'=> bcrypt('21maret2003'),
        //     'id_level'=> 1,
        // ]);

        $this->call([
            LevelSeeder::class,
            TarifSeeder::class,
            UserSeeder::class,
            SistemKonfigurasiSeeder::class
        ]);
    }
}
