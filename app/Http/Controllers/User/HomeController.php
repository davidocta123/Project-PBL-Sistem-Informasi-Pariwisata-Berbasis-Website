<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Glampingmodel;

class HomeController extends Controller
{
    public function index()
    {
        $produk = Glampingmodel::all(); // ambil semua data glamping
       return view('user.home', compact('produk'));
    }
}
