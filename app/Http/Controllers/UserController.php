<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password'=> 'required'
        ]);

        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return back()->withErrors(['Invalid']);
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    public function register(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed'
        ]);
            $user = new User();
            $user->name = $req->input('name');
            $user->email = $req->input('email');
            $user->password = Hash::make($req->input('password'));
            $user->save();

            Auth::login($user);
            return redirect('login');
    }
}
