<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function loginPost(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->route('home_admin');
        }
            return redirect()->route('admin.login')->withErrors('Email və ya Şifre səhvdi!');
    }

    
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
