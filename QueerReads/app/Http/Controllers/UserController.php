<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show(User $user) {
        $userBooks = $user->books()
            ->with('category')
            ->get()
            ->groupBy('pivot.status');

        return view('users.show', compact('user', 'userBooks'));
    }
}
