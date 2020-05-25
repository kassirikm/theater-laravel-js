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
        $user = Auth::user($user);
        return view('users.edit', compact('user'));
    }

    public function update(User $user, Request $request,$id)
    { 
        $data = $request->validate([
            'login' => 'required',
            'firstname' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);
        //Auth::whereId($user)->update($data);

        $user->login = request::input('login');
        $user->firstname = request::input('firstname');
        $user->password = bcrypt(request::input('password'));

        $user->save();
        Flash::message('Your account has been updated!');

        return back();
    }
}