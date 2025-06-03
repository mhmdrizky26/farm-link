<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $produks = Produk::all(); // Mengambil semua data produk
        return view('welcome', compact('produks'));
    }

    public function showNews($id)
    {
        $produk = Produk::findOrFail($id);
        return view('user.singlenews', compact('produk'));
    }

}
