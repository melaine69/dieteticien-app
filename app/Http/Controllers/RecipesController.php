<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeStoreRequest;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller

{
    public function index() {
        $recipes = Recipe::all();

        return view('recipes.index', compact('recipes'));
    }
    public function create () {

        return view('recipes.create');
    }

    public function store(RecipeStoreRequest $request) {
        $recipe = Recipe::create($request->validated());


        return redirect()->route('recipes');


    }
}
