<?php

namespace App\Http\Controllers;

use App\Models\Categorymodel;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Menampilkan semua kategori
     */
    public function index()
    {
        $categories = Categorymodel::all();
        return view('pages.categories.index', compact('categories'));
    }

    /**
     * Menampilkan form untuk tambah kategori
     */
    public function create()
    {
        return view('pages.categories.create');
    }

    /**
     * Menyimpan kategori baru ke database
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Categorymodel::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail kategori tertentu
     */
    public function show($id)
    {
        $category = Categorymodel::findOrFail($id);
        return view('pages.categories.show', compact('category'));
    }

    /**
     * Menampilkan form edit kategori
     */
    public function edit($id)
    {
        $category = Categorymodel::findOrFail($id);
        return view('pages.categories.edit', compact('category'));
    }

    /**
     * Memperbarui kategori di database
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Categorymodel::findOrFail($id);
        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    /**
     * Menghapus kategori dari database
     */
    public function destroy($id)
    {
        $category = Categorymodel::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil dihapus!');
    }
}
