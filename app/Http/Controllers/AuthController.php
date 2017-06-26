<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;


class AuthController extends Controller
{
    public function login()
    {
    	return view('welcome');
    }

    public function handleLogin(Request $request)
    {
    	// $data = $request->only('email', 'password');
    	// if (\Auth::attempt($data)) {
    	// 	//return 'You Logged in';
    	// 	return redirect()->intended('partials.home');
    	// }
        if (! auth()->attempt(request(['email', 'password']))) {
            return back()->withInput();
        }

    	return redirect('partials.home');
    }

    public function logout()
    {
        \Auth::logout();
        return redirect()->route('login');
    }
}
