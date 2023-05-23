<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function loginlah(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);
        $input = $request->all();
        if(auth()->attempt(array('email' =>$input['email'], 'password' => $input['password']))){
            if(auth()->user()->role == "admin"){
                return redirect('/admin');
            }else{
                return redirect('/home');
            }
        }
        return back()->with('loginerr', 'Login gagal')->onlyInput('email');
    }

    public function keluar(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function logout(Request $request){
        Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
    }
}
