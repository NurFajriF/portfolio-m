<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Education::create([
            'logo' => 'https://dianisa.com/wp-content/uploads/2024/10/Logo-Universitas-Sebelas-Maret-UNS-Surakarta-Dianisa.com_.svg',
            'name' => 'Sebelas Maret University',
            'time' => '2021 - Present',
            'description' => 'Majoring in informatics and computer engineering education',
        ]);

        Education::create([
            'logo' => '',
            'name' => '5th Senior Highschool Surakarta',
            'time' => '2018 - 2021',
            'description' => 'Majoring in Science and Mathematics',
        ]);
    }
}
