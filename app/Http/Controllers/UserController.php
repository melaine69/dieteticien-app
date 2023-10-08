<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index() {
        $users = User::paginate(20);

        return view('users.index', compact('users'));
    }

    public function create() {

        return view('users.create');
    }

    public function store(UserStoreRequest $request) {
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'allergens' => array_map('trim',explode(",", $request->allergens)),
            'diets' => array_map('trim',explode(",", $request->diets)),
        ]);

        return redirect()->route('users')->with('status', __('Le patient <strong>:name</strong> a été ajouté.', ['name' => $user->name]) );;

    }

    public function edit(User $user) {
        return view('users.edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, User $user) {
        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'allergens' => array_map('trim',explode(",", $request->allergens)),
            'diets' => array_map('trim',explode(",", $request->diets)),
        ]);
        return redirect()->route('users')->with('status', __('Le patient <strong>:name</strong> a été mis à jour.', ['name' => $user->name]) );
    }
}
