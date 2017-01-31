<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegister()
		{
			return View::make('register');
		}

		public function doRegister()
		{
			$user = new User;
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->email = Input::get('email');
			$user->username = Input::get('username');
			$user->phone_number = Input::get('phone_number');
			$user->password = Hash::make(Input::get('password'));
			$user->save();
			$theEmail = Input::get('email');
			return View::make('thanks')->with('theEmail', $theEmail);
		}
}
