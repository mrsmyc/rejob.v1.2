<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

use Image;

class ProfileController extends Controller
{
    public function index() {
        return view('profile.index', array('user'=>Auth::user()));
    }
    public function update_avatar(Request $request) {
        // if($request->hasFile('avatar')) {
        //     $avatar = $request->file('avatar');
        //     $filename = time() . '.' . $avatar->getClientOriginalExtension();
        //     Image::make($avatar)->resize(300, 300)->save( public_path('uploads/avatars/' . $filename) );

        //     $user = Auth::user();
        //     $user->avatar = $filename;
        //     $user->save();
        // }

        return view('profile.index', array('user'=>Auth::user()));
    }
}
