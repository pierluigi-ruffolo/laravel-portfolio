<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypestableSeeder extends Seeder
{

    public function run(Faker $faker): void
    {
        $types = ['Front-end', 'Back-end', 'Full-stack'];
        foreach ($types as $type) {
            $newType = new Type();
            $newType->name = $type;
            $newType->description = $faker->paragraph();
            $newType->save();
        }
    }
}
