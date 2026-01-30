-- Active: 1769523556450@@127.0.0.1@5432@recipes_db
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;


Route::get('/acceuil', function () {
    return '<h1>Ma plateforme de recettes</h1>';
});


Route::get('/', [RecipeController::class, 'index']);

Route::get('/recipes/create',[RecipeController::class, 'create']);

Route::POST('/recipes', [RecipeController::class, 'store']);