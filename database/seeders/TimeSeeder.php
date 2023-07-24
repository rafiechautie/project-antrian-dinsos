<?php

namespace Database\Seeders;

use App\Models\TimeAppointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timeAppointment = [
            [
                'division_id' => 1,
                'waktu_mulai' => '08:00',
                'waktu_akhir' => '09:00',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'division_id' => 1,
                'waktu_mulai' => '09:00',
                'waktu_akhir' => '10:00',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'division_id' => 2,
                'waktu_mulai' => '13:00',
                'waktu_akhir' => '14:00',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'division_id' => 2,
                'waktu_mulai' => '15:00',
                'waktu_akhir' => '16:00',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ]
        ];

        TimeAppointment::insert($timeAppointment);
    }
}
