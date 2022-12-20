<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NutriscoreGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nutriscore_grade')->insert([
            'name' => 'A',
            'color' => '1e8f4e',
            'img' => 'https://static.openfoodfacts.org/images/attributes/nutriscore-a.svg',
            'key' => 'A'
        ]);

        DB::table('nutriscore_grade')->insert([
            'name' => 'B',
            'color' => '60ac0e',
            'img' => 'https://static.openfoodfacts.org/images/attributes/nutriscore-b.svg',
            'key' => 'B'
        ]);

        DB::table('nutriscore_grade')->insert([
            'name' => 'C',
            'color' => 'eeae0e',
            'img' => 'https://static.openfoodfacts.org/images/attributes/nutriscore-c.svg',
            'key' => 'C'
        ]);
        
        DB::table('nutriscore_grade')->insert([
            'name' => 'D',
            'color' => 'ff6f1e',
            'img' => 'https://static.openfoodfacts.org/images/attributes/nutriscore-d.svg',
            'key' => 'D'
        ]);

        DB::table('nutriscore_grade')->insert([
            'name' => 'E',
            'color' => 'df1f1f',
            'img' => '/images',
            'key' => 'https://static.openfoodfacts.org/images/attributes/nutriscore-e.svg'
        ]);

        DB::table('nutriscore_grade')->insert([
            'name' => 'Unknown',
            'color' => 'a0a0a0',
            'img' => 'https://static.openfoodfacts.org/images/attributes/nutriscore-unknown.svg',
            'key' => 'Unknown'
        ]);
    }
}
