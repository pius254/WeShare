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
	Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

	Route::resource('users', 'UsersController', ['only' => ['create', 'store']]);

	Route::get('/home', ['middleware' => 'auth', 'as' => 'home', 'uses' => 'UsersController@home']);
});
