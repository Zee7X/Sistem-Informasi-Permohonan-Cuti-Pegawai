<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    //Login Form
    public function login_view(){
        return view('Auth.login');
    }

    //Reset Password Form
    public function reset_password(){
        return view('Auth.reset_password');
    }

    //Login Function
    public function login(Request $request){
        $check = 0;
        $request->validate([
            'nip' => 'required',
            'password' => 'required',
        ]);

        $credential = $request->except(['_token']);

        $users = User::select('nip')->get();

        foreach ($users as $user)
        {
            if($user->nip == $request->nip)
            {
                $check = 1;
            }
        }
        if($check == 1){
            if (auth()->attempt($credential)){

                return redirect()->route('dashboard')->with(['success' => 'Selamat datang di dashboard']);
            }else{
                return redirect()->route('login')->with(['error' => 'NIP atau Password Salah']);
            }
        }
        else{
            return redirect()->route('login')->with(['error' => 'NIP atau Password Invalid']);
        }
    }

    //Logout Function
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
