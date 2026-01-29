<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;


Route::get('/acceuil', function () {
    return '<h1>Ma plateforme de recettes</h1>';
});

Route::get('/', function () {
    return '<h1>Ma plateforme de recettes</h1>';
});

Route::get('/', [RecipeController::class, 'index']);
