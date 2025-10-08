<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactmodel;

class ContactUsController extends Controller
{
    /**
     * Tampilkan semua pesan Contact Us (halaman admin)
     */
    public function index()
    {
        $contacts = Contactmodel::latest()->get();
        return view('pages.contact.index', compact('contacts'));
    }

    /**
     * Tampilkan detail pesan tertentu
     */
    public function show($id)
    {
        $contact = Contactmodel::findOrFail($id);
        return view('pages.contact.show', compact('contact'));
    }

    /**
     * Hapus pesan dari database
     */
    public function destroy($id)
    {
        $contact = Contactmodel::findOrFail($id);
        $contact->delete();

        return redirect()->route('contact.index')->with('success', 'Pesan berhasil dihapus!');
    }
}
