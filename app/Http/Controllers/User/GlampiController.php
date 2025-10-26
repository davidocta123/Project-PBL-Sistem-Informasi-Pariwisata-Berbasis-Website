<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Glampingmodel;
use Illuminate\Http\Request;

class GlampiController extends Controller
{
    public function index()
    {
         $destinations = Glampingmodel::all(); // ambil semua data glamping
       return view('user.glampi', compact('destinations'));
    }
}
