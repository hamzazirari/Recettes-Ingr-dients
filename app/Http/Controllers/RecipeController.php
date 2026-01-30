<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;


class RecipeController extends Controller
{
    public function index()
{
    $recipes = Recipe::all();
    return view('recipes.index', compact('recipes'));
}

public function create()
{
    return view('recipes.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|max:255',
        'category' => 'required',
        'description' => 'required',
        'ingredients' => 'required',
        'steps' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

 $imagePath = null;

if ($request->hasFile('image')) {
    $imagePath = $request->file('image')->store('images', 'public');
}

Recipe::create([
    'title' => $request->title,
    'category' => $request->category,
    'description' => $request->description,
    'ingredients' => $request->ingredients,
    'steps' => $request->steps,
    'image' => $imagePath
]);

    return redirect('/')->with('success', 'Recette créée !');
}

}
