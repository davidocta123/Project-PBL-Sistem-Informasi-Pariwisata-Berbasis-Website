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

     public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        // Simpan data ke database
        ContactModel::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'message' => $request->message,
        ]);

        // Redirect atau kembalikan response
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
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
