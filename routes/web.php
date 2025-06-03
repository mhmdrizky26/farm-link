<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/adashboard', function() {
    return view('admin.dashboard');
});

Route::get('/indexuser', function() {
    return view('admin.user.index');
});

Route::get('/createuser', function() {
    return view('admin.user.create');
});

Route::get('/edituser', function() {
    return view('admin.user.edit');
});

Route::get('/indexproduk', function() {
    return view('admin.produk.index');
});

Route::get('/createproduk', function() {
    return view('admin.produk.create');
});

Route::get('/editproduk', function() {
    return view('admin.produk.edit');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('aadmin', function () {
    return  '<h1>Test Admin</h1>';
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('uuser', function () {
    return  '<h1>Test User</h1>';
})->middleware(['auth', 'verified', 'role:user']);

require __DIR__.'/auth.php';
