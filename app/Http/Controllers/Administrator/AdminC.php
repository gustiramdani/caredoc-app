<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminC extends Controller
{
    public function index(){
        $users = User::role('admin')->get();
        return view('backend.administrator.index',compact('users'));
    }

    public function create(Request $request){
        $user = User::role('admin')->find($request->id);
        return view('backend.administrator.create',compact('user'));
    }

    public function action(Request $request){
        $request->validate([
            'email' => [
                'required',
                'email',
                'max:250',
                Rule::unique('users')->ignore($request->id)
            ],
            'password' => 'required|min:8'
        ]);
        
        User::updateOrCreate([
            "id" => $request->id
        ],[
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);
        return redirect()->route("backend.administrator.index");
    }

    public function delete(Request $request){
        $user = User::role('admin')->find($request->id);
        $user->delete();
        return redirect()->route("backend.administrator.index");
    }
}
