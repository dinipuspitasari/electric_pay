<?php

namespace Database\Seeders;

use App\Models\SistemKonfigurasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SistemKonfigurasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config_system = [
            [
                'config_name' => 'biaya admin',
                'value' => '3000',
                'description' => "Biaya Admin",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
        ];

        SistemKonfigurasi::insert($config_system);
    }
}
