<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('user.about');
});

Route::get('/cart', function() {
    return view('user.cart');
});

Route::get('/checkout', function() {
    return view('user.checkout');
});

Route::get('/contact', function() {
    return view('user.contact');
});

Route::get('/news', function() {
    return view('user.news');
});

Route::get('/shop', function() {
    return view('user.shop');
});

Route::get('/single-news', function() {
    return view('user.singlenews');
});

Route::get('/single-product', function() {
    return view('user.singleproduct');
});

Route::get('/', [WelcomeController::class, 'index'])->name('post');

Route::middleware(['auth', 'verified', 'role:user'])->group(function () {
    Route::get('/single-news/{id}', [WelcomeController::class, 'showNews'])->name('single-news');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/users/create', [UserController::class, 'store'])->name('user.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    Route::get('/produks', [ProdukController::class, 'index'])->name('produk.index');
    Route::get('/produks/create', [ProdukController::class, 'create'])->name('produk.create');
    Route::post('/produks', [ProdukController::class, 'store'])->name('produk.store');
    Route::get('/produks/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::put('/produks/{id}', [ProdukController::class, 'update'])->name('produk.update');
    Route::delete('/produks/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
});

require __DIR__.'/auth.php';
