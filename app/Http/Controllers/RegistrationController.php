<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use App\User;

use Illuminate\Validation\ValidationException;


class RegistrationController extends Controller
{
    public function create() {

        return view('registration.create');

    }

    public function store() {

        $this->validate(request(), [

            'name' => 'required',

            'email' => 'required|email|unique:users',

            'password' => 'required|confirmed'

        ]);

        $hashed = Hash::make(request()->password);
        
        $user = new User;

        $user->name = request()->name;
        
        $user->email = request()->email;

        $user->password = $hashed;
            
        $user->save();



        Auth::login($user);

        return redirect()->home();
    }
}
