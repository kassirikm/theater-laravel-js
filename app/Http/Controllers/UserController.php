<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    public function update(User $user)
    { 
        $this->validate(request(), [
            'login' => 'required',
            'firstname' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);

        $user->login = request('login');
        $user->firstname = request('firstname');
        $user->password = bcrypt(request('password'));

        $user->save();

        return back();
    }
}