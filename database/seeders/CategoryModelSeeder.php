<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorymodels')->insert([
            ['name' => 'Outdoor'],
            ['name' => 'Indoor'],
            ['name' => 'Camping'],
            ['name' => 'Adventure'],
            ['name' => 'Relaxing'],
        ]);
    }
}
