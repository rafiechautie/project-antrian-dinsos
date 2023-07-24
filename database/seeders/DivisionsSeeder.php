<?php

namespace Database\Seeders;

use App\Models\Divisions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $divisions = [
            [
                'nama_bidang' => 'Ruang Yankes Rujukan',
                'no_ruang' => '12',
            ],
            [
                'nama_bidang' => 'Ruang Sumsel Tanggap',
                'no_ruang' => '15',
            ]
        ];

        Divisions::insert($divisions);
    }
}
