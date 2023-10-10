<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeStoreRequest;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller

{
    public function index() {
        $recipes = Recipe::paginate();
        return view('recipes.index', compact('recipes'));
    }
    public function create () {
        return view('recipes.create');
    }

    public function store(RecipeStoreRequest $request) {
        Recipe::create($request->validated());

        return redirect()->route('recipes.index');
    }

    public function edit(Recipe $recipe) {
        return view('recipes.edit', compact('recipe'));
    }

    public function update(RecipeStoreRequest $request, Recipe $recipe) {
        $recipe->update($request->validated());

        return view('recipes.edit', compact('recipe'));
    }
}
