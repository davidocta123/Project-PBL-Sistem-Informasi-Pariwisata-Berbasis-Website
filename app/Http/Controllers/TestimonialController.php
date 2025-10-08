<?php

namespace App\Http\Controllers;

use App\Models\TestimonialsModel;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    // Menampilkan semua testimoni
    public function index()
    {
        $testimonials = TestimonialsModel::latest()->get();
        return view('pages.testimonials.index', compact('testimonials'));
    }

    // Menampilkan detail satu testimoni
    public function show($id)
    {
        $testimonial = TestimonialsModel::findOrFail($id);
        return view('pages.testimonials.show', compact('testimonial'));
    }

    // Menghapus testimoni
    public function destroy($id)
    {
        $testimonial = TestimonialsModel::findOrFail($id);
        $testimonial->delete();

        return redirect()->route('testimonial.index')->with('success', 'Testimoni berhasil dihapus!');
    }
}
