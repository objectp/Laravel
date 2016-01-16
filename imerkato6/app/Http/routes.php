<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

	if(Auth::gust()){
		return Redirect::to('login');

	}else{
		return view('welcome');
	}
    
});

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

/*Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::post('articles', 'ArticlesController@store');
Route::get('articles/{id}', 'ArticlesController@show');



Route::get('articles/{id}/edit', 'ArticlesController@edit');*/

Route::resource('articles', 'ArticlesController');//this can replace all the CRUD routes above
 //above by generating all CRUED routes


//this register two route controllers for auth and password
/*Route::controllers([

	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);*/

Route::get('home', function(){
	
	if(Auth::gust()){
		return Redirect::to('Auth/login');
	} else{
		echo 'welcome home.';
	}
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout230, 230, 230Route::post('auth/register', 'Auth\AuthController@postRegister');