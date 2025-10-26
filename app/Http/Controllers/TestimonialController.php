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

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:100',
        'message' => 'required|string|max:1000',
        'rating' => 'nullable|numeric|min:1|max:5',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // Cek apakah user upload gambar
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('testimonial', 'public');
    } else {
        // gunakan gambar default
        $imagePath = 'images/default-testimonial.png';
    }

    TestimonialsModel::create([
        'name' => $request->name,
        'message' => $request->message,
        'rating' => $request->rating ?? 5,
        'image' => $imagePath,
    ]);

    return redirect()->back()->with('success', 'Terima kasih atas testimoni Anda!');
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
