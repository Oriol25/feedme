<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seeder de la tabla de alergenos
        $this->call(AlergenoSeeder::class);
        $this->call(NovaGroupSeeder::class);
        $this->call(NutriscoreGradeSeeder::class);

    }
}
