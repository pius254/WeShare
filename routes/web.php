<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function(){
	Route::get('/login', ['as' => 'login', 'users' => 'AuthController@login']);
	Route::get('/handleLogin', ['as' => 'handleLogin', 'users' => 'AuthController@handleLogin']);

	Route::get('/register', ['as' => 'register', 'users' => 'AuthController@register']);
	Route::get('/handleRegister', ['as' => 'handleRegister', 'users' => 'AuthController@handleRegister']);
});
