<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginC extends Controller
{
    public function index(Request $request){
        return view('auth.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $targetRole = $user->getRoleNames()->first(); // Assuming the user has a single role
            session(['targetRole' => $targetRole]);
            return redirect()->route('backend.dashboard.index');
        }

        return back()->withErrors(['email' => 'Your provided credentials do not match in our records.'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
