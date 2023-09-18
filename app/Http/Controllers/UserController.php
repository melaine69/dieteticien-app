<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

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
        $user = User::create($request->validated());

        return redirect()->route('users');

    }
}
