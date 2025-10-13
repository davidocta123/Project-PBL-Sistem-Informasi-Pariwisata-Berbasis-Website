<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('activitymodels')->insert([
            [
                'name' => 'Camping di Hutan Pinus',
                'description' => 'Nikmati pengalaman camping seru di hutan pinus yang sejuk dan alami.',
                'category_id' => 3, // pastikan id kategori ini sudah ada di tabel categorymodels
                'image' => 'camping.jpg',
                'location' => 'Buni Hayu, Bandung',
                'facilities' => json_encode(['Tenda', 'Api Unggun', 'Toilet', 'Mushola']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Outbound Team Building',
                'description' => 'Aktivitas seru untuk memperkuat kerjasama dan kekompakan tim.',
                'category_id' => 4,
                'image' => 'outbound.jpg',
                'location' => 'Lembang, Bandung',
                'facilities' => json_encode(['Instruktur', 'Peralatan Outbound', 'Snack']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Glamping Eksklusif',
                'description' => 'Menginap mewah di tengah alam dengan fasilitas lengkap dan nyaman.',
                'category_id' => 5,
                'image' => 'glamping.jpg',
                'location' => 'Ciwidey, Bandung',
                'facilities' => json_encode(['Kamar AC', 'Kolam Renang', 'Restoran']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
