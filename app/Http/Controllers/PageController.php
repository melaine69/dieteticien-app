<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        $recipes = Recipe::where('public', true)->get();

        return view('welcome', compact('recipes'));
    }

    public function dashboard() {
        $adminCount = User::where('role', 'admin')->count();
        $patientCount = User::where('role', 'patient')->count();
        $recipeCount = Recipe::count();

        return view('dashboard', compact('adminCount', 'patientCount', 'recipeCount'));

    }

    public function contact() {
        return view('pages.contact');
    }
    public function terms() {
        return view('pages.terms');
    }

    public function privacy() {
        return view('pages.privacy');
    }
}
