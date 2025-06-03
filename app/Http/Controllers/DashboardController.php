<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produk;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalProduk = Produk::count();

        return view('admin.dashboard', compact('totalUsers', 'totalProduk'));

    }
}
