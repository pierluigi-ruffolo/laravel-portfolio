<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectstableSeeder extends Seeder
{

    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->title = $faker->sentence(3);
            $project->slug = Str::slug($project->title, '-');
            $project->client = $faker->company();
            $project->period = $faker->randomElement(['3 mesi', '2023-2024', 'In corso', '6 mesi']);
            $project->type_id = $faker->numberBetween(1, 3);
            $project->summary = $faker->paragraph();
            $project->save();
        }
    }
}
