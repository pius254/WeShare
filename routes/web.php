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
	Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@login']);
	Route::post('/handleLogin', ['as' => 'handleLogin', 'uses' => 'AuthController@handleLogin']);

	Route::get('/register', ['as' => 'register', 'uses' => 'AuthController@register']);
	Route::post('/handleRegister', ['as' => 'handleRegister', 'uses' => 'AuthController@handleRegister']);

	Route::get('/home', ['middleware' => 'auth', 'as' => 'home', 'uses' => 'UsersController@home']);
});
