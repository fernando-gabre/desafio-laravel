<?php

use App\Http\Controllers\Api\V1\ProductController;
use App\Http\Controllers\Api\V1\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\UserController;


/**
 * @OA\Info(
 *     title="API de laravel",
 *     version="1.0.0",
 *     description="Obs estou testando nunca usei isso"
 * )
 */

Route::get('/users',[UserController::class,'index']);
Route::get('/users/{id}',[UserController::class,'show']);
Route::get('usuario/{id}/produtos',[UserController::class,'userProducts'])->name('user.products');


Route::get('/produtos',[ProductController::class,'index'])->name('produtos');
Route::get('/produtos/{id}',[ProductController::class,'show'])->name('produtos.find');
Route::post('produtos',[ProductController::class,'store'])->name('produtos.store');




Route::get('/categories',[CategoryController::class,'index'])->name('categories');
Route::get('/categories/{id}',[CategoryController::class,'show'])->name('categories.find');
Route::get('categories/user/{id}',[CategoryController::class,'forUser'])->name('categories.user');
Route::post('categories',[CategoryController::class,'store'])->name('store');