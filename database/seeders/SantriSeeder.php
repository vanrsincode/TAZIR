<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nis'           => '1234567890',
                'nama_santri'   => 'Tono',
                'jk_santri'     => 'Laki-laki'
            ],
            [
                'nis'           => '1234567891',
                'nama_santri'   => 'Toni',
                'jk_santri'     => 'Laki-laki'
            ]
        ];

        foreach ($data as $key => $value) {
            # code...
        }
    }
}
