<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard.home');
        }

        return back()->withErrors(['The provided credentials do not match our records.']);
    }

    public function logout(){
        
        Auth::logout();
        return redirect()->route('login');
    }


}
