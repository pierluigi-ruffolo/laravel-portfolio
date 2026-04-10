<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologiestableSeeder extends Seeder
{

    public function run(Faker $faker): void
    {

        $technologies = ['HTML5', 'CSS3', 'JavaScript', 'PHP', 'Laravel', 'Vue.js', 'MySQL', 'Bootstrap', 'Sass', 'Vite'];

        foreach ($technologies as $technology) {

            $newTechnology = new Technology();
            $newTechnology->name = $technology;
            $newTechnology->color = $faker->safeHexColor();
            $newTechnology->save();
        }
    }
}
