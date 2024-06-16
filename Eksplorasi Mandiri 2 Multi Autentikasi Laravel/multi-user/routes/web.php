<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\UserProductController;
use App\Http\Controllers\CartController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', [UserController::class, 'index'])
//     ->middleware(['auth', 'user'])
//     ->name('dashboard');

Route::middleware(['auth', 'user'])->group(function () {

    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('products', [UserProductController::class, 'index'])->name('products');
    Route::get('carts', [CartController::class, 'index'])->name('carts');
    Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/remove/{product}', [CartController::class, 'removeFromCart'])->name('cart.remove');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('admin/dashboard', [HomeController::class, 'index']);

    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
    Route::post('/admin/products/save', [ProductController::class, 'save'])->name('admin/products/save');
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
    Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
    Route::get('/admin/products/delete/{id}', [ProductController::class, 'delete'])->name('admin/products/delete');
    Route::get('/admin/manageuser', [ManageUserController::class, 'index'])->name('admin/manageuser');
    Route::get('/admin/manageuser/create', [ManageUserController::class, 'create'])->name('admin/manageuser/create');
    Route::post('/admin/manageuser/save', [ManageUserController::class, 'save'])->name('admin/manageuser/save');
    Route::get('/admin/manageuser/edit/{id}', [ManageUserController::class, 'edit'])->name('admin/manageuser/edit');
    Route::put('/admin/manageuser/edit/{id}', [ManageUserController::class, 'update'])->name('admin/manageuser/update');
    Route::get('/admin/manageuser/delete/{id}', [ManageUserController::class, 'delete'])->name('admin/manageuser/delete');
});



require __DIR__ . '/auth.php';
 
// Route::get('admin/dashboard', [HomeController::class, 'index']);
// Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth', 'user']);