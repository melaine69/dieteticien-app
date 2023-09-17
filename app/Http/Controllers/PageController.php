<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        $recipes = Recipe::where('public', true)->get();

        return view('welcome', compact('recipes'));
    }
}
