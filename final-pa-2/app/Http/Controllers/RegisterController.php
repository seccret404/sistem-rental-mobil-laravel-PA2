<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register');

    }

    public function registered(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'password' => 'required',

        ]);
        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);

        return redirect('/')->with('berhasil', "Registrasi berhasil, Silahkan login kembali!");

    }
}
