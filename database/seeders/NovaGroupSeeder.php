<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NovaGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nova_group')->insert([
          'name' => 'Nova 1',
          'description' => 'Unprocessed or minimally processed foods',
          'color' => '00FF00',
          'img' => 'https://static.openfoodfacts.org/images/attributes/nova-group-1.svg',
          'key' => 1
        ]);

        DB::table('nova_group')->insert([
            'name' => 'Nova 2',
            'description' => 'Processed culinary ingredients',
            'color' => 'ffff00',
            'img' => 'https://static.openfoodfacts.org/images/attributes/nova-group-2.svg',
            'key' => 2
        ]);

        DB::table('nova_group')->insert([
            'name' => 'Nova 3',
            'description' => 'Processed foods',
            'color' => 'ff6600',
            'img' => 'https://static.openfoodfacts.org/images/attributes/nova-group-3.svg',
            'key' => 3
        ]);

        DB::table('nova_group')->insert([
            'name' => 'Nova 4',
            'description' => 'ultra processed food and drink products',
            'color' => 'ff0000',
            'img' => 'https://static.openfoodfacts.org/images/attributes/nova-group-4.svg',
            'key' => 4
        ]);

        DB::table('nova_group')->insert([
            'name' => 'Unknown',
            'description' => 'Unknown',
            'color' => 'b3b3b3',
            'img' => 'https://static.openfoodfacts.org/images/attributes/nova-group-unknown.svg',
            'key' => 5
        ]);
    }
}
