<?php

namespace App\Http\Controllers;

use App\Models\Glampingmodel;
use Illuminate\Http\Request;

class GlampingController extends Controller
{
    /**
     * Menampilkan daftar semua glamping.
     */
    public function index()
    {
        $glampings = Glampingmodel::all();
        return view('pages.glamping.index', compact('glampings'));
    }

    /**
     * Menampilkan form tambah glamping.
     */
    public function create()
    {
        return view('pages.glamping.create');
    }

    /**
     * Menyimpan data glamping baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'capacity' => 'required|integer|min:1',
            'facilities' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'rating' => 'nullable|numeric|min:0|max:5',
            'location' => 'required|string|max:255',
            'is_availability' => 'boolean',
        ]);

        // Upload gambar
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('glamping', 'public');
        }

        // Simpan ke database
        Glampingmodel::create($validated);

        return redirect()->route('glamping.index')->with('success', 'Data glamping berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail glamping.
     */
    public function show($id)
    {
        $glamping = Glampingmodel::findOrFail($id);
        return view('pages.glamping.show', compact('glamping'));
    }

    /**
     * Menampilkan form edit glamping.
     */
    public function edit($id)
    {
        $glamping = Glampingmodel::findOrFail($id);
        return view('pages.glamping.edit', compact('glamping'));
    }

    /**
     * Mengupdate data glamping.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'capacity' => 'required|integer|min:1',
            'facilities' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'rating' => 'nullable|numeric|min:0|max:5',
            'location' => 'required|string|max:255',
            'is_availability' => 'boolean',
        ]);

        $glamping = Glampingmodel::findOrFail($id);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('glamping', 'public');
        }

        $glamping->update($validated);

        return redirect()->route('glamping.index')->with('success', 'Data glamping berhasil diperbarui!');
    }

    /**
     * Menghapus data glamping.
     */
    public function destroy($id)
    {
        $glamping = Glampingmodel::findOrFail($id);
        $glamping->delete();

        return redirect()->route('glamping.index')->with('success', 'Data glamping berhasil dihapus!');
    }
}
