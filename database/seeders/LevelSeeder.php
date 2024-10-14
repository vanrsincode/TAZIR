<?php

namespace Database\Seeders;

use App\Models\Kelola\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $level = [
            [
                'level'     => 1,
                'denda'     => 150000,
                'hukuman'   => 'Menulis dan menghapal, Berdiri membaca Al-Qur`an, Disita barang buktinya'
            ],
            [
                'level'     => 2,
                'denda'     => 1000000,
                'hukuman'   => 'Menulis dan menghapal, Berdiri membaca Al-Qur`an, Disita barang buktinya'
            ],
            [
                'level'     => 3,
                'denda'     => 5000000,
                'hukuman'   => 'Dipulangkan (dengan kebijakan Pengasuh)'
            ]
        ];

        foreach ($level as $key => $value) {
            Level::create($value);
        }
    }
}
