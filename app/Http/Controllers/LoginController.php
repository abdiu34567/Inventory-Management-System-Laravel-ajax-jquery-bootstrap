<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function __construct()
    {
        $this->middleware('guest');
    }

    public function Register(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|min:6',

        ]);

        $remember = $request->has('remember') ? true : false;

        if (Auth::attempt($validated, $remember)) {
            $request->session()->regenerate();

            // check if user profile exist profile = 1 else
            if (File::where('user_id', Auth::user()->id)->exists()) {
                return view('dashboard', [
                    'profile' => File::where('user_id', Auth::user()->id)
                        ->get(),
                    'data' => 1,
                    'error' => 'none' // if calidation is correct and unable to login=> will display alert
                ]);
            } else {
                return view('dashboard', [
                    'data' => 0,
                    'error' => 'none'
                ]);
            }
        } else { //if password is wrong => back to login
            return view('auth.login', [
                'message' => 'Email or Password is Invalid',
                'error' => 'found'
            ]);
        }
    }

    public function CheckAuth()
    {
        //error => when reloading login page to handle $error variable already assigned under register
        return view('auth.login', ['error' => 'none']);
    }
}

