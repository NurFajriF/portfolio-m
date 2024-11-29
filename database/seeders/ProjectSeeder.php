<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Controllers\ProjectController;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Project::create([
            'name' => 'Tikiland Project',
            'screenshot' => '/img/projects-tikiland.png',
            'description' => 'Website reservasi penginapaan cottage menggunakan Laravel and bootstrap css',
            'tech_stack' => 'Laravel, Bootstrap CSS'
        ]);

        Project::create([
            'name' => 'Asclepius Project',
            'screenshot' => '/img/projects-asclepius.png',
            'description' => 'cancer skin prediction menggunakan model machine learning yang dideploy di Google Cloud Platform',
            'tech_stack' => 'Nodejs, hapi, '
        ]);

        Project::create([
            'name' => 'POS Cipto Mulyo',
            'screenshot' => '/img/projects-ciptomulyo.png',
            'description' => 'aplikasi kasir sederhana untuk warung',
            'tech_stack' => 'Django, jquery, css'
        ]);

        Project::create([
            'name' => 'portfolio-m',
            'screenshot' => '/img/projects-asclepius.png',
            'description' => 'website portfolio berisi beberapa project yang pernah dibuat',
            'tech_stack' => 'Laravel, Tailwind CSS'
        ]);
    }
}
