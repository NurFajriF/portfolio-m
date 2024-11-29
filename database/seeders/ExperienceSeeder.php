<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Experience::create([
            'logo' => 'https://www.dicoding.com/img/bangkit/logo.svg',
            'name' => 'Bangkit Academy',
            'time' => 'Feb 2024 - June 2024',
            'description' => 'Cloud Computing Cohort 2024. learn about cloud computing with the google cloud platform, backend development, application of machine learning on google cloud, soft skills, and final capstone project creating a book recommendation application.',
        ]);

    }
}
