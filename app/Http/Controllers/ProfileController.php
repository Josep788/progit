<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function updateduser(Request $request){
        auth()->user()->update($request->only('name', 'email'));

        if($request->input('password')){
            auth()->user()->update(['password'=>bcrypt($request->input('password'))]);
        }

        return redirect()->route('profile');
    }
}
