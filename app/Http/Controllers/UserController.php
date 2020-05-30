<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
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

    public function update( Request $request, User $user)
    { 
       $request->validate([
            'login' => 'required',
            'firstname' => 'required',
            'password' =>'required|min:6|confirmed'
        ]);
        $user->update($request->all());
/*
        $user->login = $request::input('login');
        $user->firstname = $request::input('firstname');
        $user->password = bcrypt($request::input('password'));
        */
        $user->save();
        //Session ::Flash('Your account has been updated!');

        return redirect('/acceuil')->with('succes','Edition du profil réussi');
    }
}