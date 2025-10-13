<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contactmodels')->insert([
            [
                'name' => 'David Octavyanto',
                'phone' => '081234567890',
                'email' => 'david@example.com',
                'message' => 'Halo, saya tertarik untuk memesan paket wisata di Buni Hayu.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siti Rahmawati',
                'phone' => '082198765432',
                'email' => 'siti@example.com',
                'message' => 'Apakah tersedia promo untuk akhir pekan?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Andi Pratama',
                'phone' => '085712345678',
                'email' => 'andi@example.com',
                'message' => 'Saya ingin bertanya tentang fasilitas camping.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
