<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GlampingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('glampingmodels')->insert([
            'name' => 'Kamar Deluxe',
            'description' => 'Kamar glamping nyaman dengan pemandangan indah dan fasilitas lengkap.',
            'price' => 750000.00,
            'capacity' => 2,
            'facilities' => json_encode(['AC', 'Wifi', 'Kamar Mandi Dalam', 'Sarapan']),
            'image' => 'deluxe-room.jpg',
            'rating' => 4.7,
            'location' => 'Buni Hayu Glamping, Bandung',
            'is_availability' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
