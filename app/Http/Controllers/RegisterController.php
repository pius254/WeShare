<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function showRegister()
		{
			return view('welcome');
		}

	public function doRegister(Request $request)
		{
			// $user = new User;
			// $user->first_name = Input::get('first_name');
			// $user->last_name = Input::get('last_name');
			// $user->email = Input::get('email');
			// $user->username = Input::get('username');
			// $user->phone_number = Input::get('phone_number');
			// $user->password = Hash::make(Input::get('password'));
			// $user->save();
			// $theEmail = Input::get('email');
			// return View::make('thanks')->with('theEmail', $theEmail);

			// Validate the form inputs
			$this->validate($request,[
				'first_name' => 'required',
				'last_name' => 'required',
				'email' => 'required|email|unique:users',
				'username' => 'required',
				'phone_number' => 'required',
				'password' => 'required|confirmed'
			]);
			$data = $request->all();
			$data['password'] = bcrypt($data['password']);


			// Create and save the user.
			if(User::create($data))
			{
				return redirect('/#registration')->with('success','You have registered successfully!!');
			}

			return redirect('/#registration')->with('error','Ooops! Something went wrong.');

			// auth()->login($user);

			//return back();
		}
}
