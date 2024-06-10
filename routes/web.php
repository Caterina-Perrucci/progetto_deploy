<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/profile', [PublicController::class, 'profile'])->name('user.profile');

Route::get('/recipe/create', [RecipeController::class, 'create'])->name('recipe.create');
Route::get('/recipe/index', [RecipeController::class, 'index'])->name('recipe.index');
Route::get('/recipe/show/{recipe}', [RecipeController::class, 'show'])->name('recipe.show');
Route::get('/recipe/category/{category}', [RecipeController::class, 'indexCategory'])->name('recipe.index-category');
Route::get('/recipe/edit/{recipe}', [RecipeController::class, 'edit'])->name('recipe.edit');
