<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function store(Request $request, $produkId)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $produk = Produk::findOrFail($produkId);

        $produk->comments()->create([
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan!');
    }



}
