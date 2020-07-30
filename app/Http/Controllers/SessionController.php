<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class SessionController extends Controller
{

    public function __construct() {

        $this->middleware('guest', ['except' => 'destroy']);
        
    }

    public function create() {

        return view('sessions.createLogIn');

    }

    public function destroy() {

        Auth::logout();

        return redirect()->home();


    }

    public function store(Request $request) {

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            return redirect()->home();
        }
        else {
            return back()->withInput()->withErrors([
                'message' => 'Вы ввели неправильные данные, повторите попытку.'
            ]);
        }



    }
}
