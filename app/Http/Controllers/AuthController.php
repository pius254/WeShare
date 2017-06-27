<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class AuthController extends Controller
{
    public function login()
    {
    	return view('welcome');
    }

    public function handleLogin(Request $request)
    {
    	$data = $request->only('email', 'password');
    	if (auth()->attempt($data)) {
    		// return 'You Logged in';
    		return view('partials.home');
    	}
        // if (! auth()->attempt(request(['email', 'password']))) {
        //     return back()->withInput();
        // }

    	return back()->with('error', 'Sorry!! Please check your email or password and try again!');
    }

    public function logout()
    {
        auth()->logout();
        return view('welcome');
    }
}
