<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('question.index');
        } else {
            return redirect()->back()->with('error', 'incorrrect Password');
        }
    }

    public function login()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
