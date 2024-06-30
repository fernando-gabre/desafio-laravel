<?php

use App\Http\Controllers\{
    ProductController,
    CategoryController,
    ProfileController,
    UserController
};
use App\Http\Middleware\CheckIsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return route('login');
});

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () { //
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('produtos',[ProductController::class,'index'])->name('products');
    Route::get('produtos/create',[ProductController::class,'create'])->name('products.create');
    Route::get('produtos/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
    Route::post('produtos/store',[ProductController::class,'store'])->name('products.store');
    Route::put('produtos/update',[ProductController::class,'update'])->name('products.update');
    Route::delete('produtos/destroy',[ProductController::class,'destroy'])->name('products.destroy');


    Route::get('categorias',[CategoryController::class,'index'])->name('categories');
    Route::get('categorias/create',[CategoryController::class,'create'])->name('categories.create');
    Route::get('categorias/edit/{id}',[CategoryController::class,'edit'])->name('categories.edit');
    Route::post('categorias/store',[CategoryController::class,'store'])->name('categories.store');
    Route::put('categorias/update',[CategoryController::class,'update'])->name('categories.update');
    Route::delete('categorias/destroy',[CategoryController::class,'destroy'])->name('categories.destroy');

    Route::middleware([CheckIsAdmin::class])->group(function () {
        Route::get('produtos/all',[ProductController::class,'all'])->name('products.all');
        Route::get('users',[UserController::class,'index'])->name('users');

    });


});

require __DIR__.'/auth.php';
