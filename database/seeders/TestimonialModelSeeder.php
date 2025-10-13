<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials_models')->insert([
            [
                'name' => 'David Octavyanto',
                'message' => 'Pelayanan sangat memuaskan! Tempatnya nyaman dan bersih.',
                'rating' => 5,
                'image' => 'testimonial1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siti Rahma',
                'message' => 'Suasananya indah dan cocok untuk healing bareng keluarga!',
                'rating' => 4.8,
                'image' => 'testimonial2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Andi Pratama',
                'message' => 'Fasilitas lengkap, staff ramah, dan harga terjangkau.',
                'rating' => 4.9,
                'image' => 'testimonial3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
