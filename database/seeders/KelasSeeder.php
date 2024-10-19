<?php

namespace Database\Seeders;

use App\Models\Kelola\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_kelas'    => 'Idadiyah'
            ],
            [
                'nama_kelas'    => '2 ibtida'
            ],
            [
                'nama_kelas'    => '3 ibtida'
            ],
            [
                'nama_kelas'    => '4 ibtida'
            ],
            [
                'nama_kelas'    => '5 ibtida'
            ],
            [
                'nama_kelas'    => '6 ibtida'
            ],
            [
                'nama_kelas'    => '1 tsanawiyah'
            ],
            [
                'nama_kelas'    => '2 tsanawiyah'
            ],
            [
                'nama_kelas'    => '3 tsanawiyah'
            ],
            [
                'nama_kelas'    => 'Ulya'
            ]
        ];
        foreach ($data as $key => $value) {
            Kelas::create($value);
        }
    }
}
