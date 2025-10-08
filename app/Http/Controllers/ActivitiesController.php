<?php

namespace App\Http\Controllers;

use App\Models\Activitymodel;
use App\Models\Categorymodel;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    /** 
     * Tampilkan semua aktivitas
     */
    public function index()
    {
        $activities = Activitymodel::with('category')->get();
        return view('pages.activities.index', compact('activities'));
    }

    /** 
     * Tampilkan form tambah aktivitas
     */
    public function create()
    {
        $categories = Categorymodel::all();
        return view('pages.activities.create', compact('categories'));
    }

    /** 
     * Simpan data aktivitas baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categorymodels,id', // perbaikan disini
            'location' => 'nullable|string|max:255',
            'facilities' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // upload gambar
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('activities', 'public');
        }

        // simpan ke database
        Activitymodel::create($validated);

        return redirect()->route('activities.index')->with('success', 'Aktivitas berhasil ditambahkan!');
    }

    /** 
     * Tampilkan detail aktivitas
     */
    public function show($id)
    {
        $activity = Activitymodel::with('category')->findOrFail($id);
        return view('pages.activities.show', compact('activity'));
    }

    /** 
     * Tampilkan form edit aktivitas
     */
    public function edit($id)
    {
        $activity = Activitymodel::findOrFail($id);
        $categories = Categorymodel::all();
        return view('pages.activities.edit', compact('activity', 'categories'));
    }

    /** 
     * Update data aktivitas
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categorymodels,id',
            'location' => 'nullable|string|max:255',
            'facilities' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $activity = Activitymodel::findOrFail($id);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('activities', 'public');
        }

        $activity->update($validated);

        return redirect()->route('activities.index')->with('success', 'Aktivitas berhasil diperbarui!');
    }

    /** 
     * Hapus aktivitas
     */
    public function destroy($id)
    {
        $activity = Activitymodel::findOrFail($id);
        $activity->delete();

        return redirect()->route('activities.index')->with('success', 'Aktivitas berhasil dihapus!');
    }
}
