<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	Route::get('/', function () {
    return view('welcome');
	});
    //Place all your web routes here otherwise $errors variable is not working
	Route::get('/about', 'PagesController@about');
	Route::get('/contact', 'PagesController@contact');

	Route::resource('articles', 'ArticlesController');//this can replaces all the routs for articles above
	Route::resource('houses', 'HousesController');

	Route::auth();
	Route::get('/home', 'HomeController@index');

	/*Route::controller([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
		]);*/


});

	/*Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});*/

/*Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');*/

/*Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{id}', 'ArticlesController@show');//{id} is a wildcard can take anything
Route::post('/articles', 'ArticlesController@store');//you send post request to the name of the collecion
Route::get('articles/{id}/edit', 'ArticlesController@edit');

Route::get('/houses', 'HousesController@index');
Route::get('/houses/create', 'HousesController@create');
Route::get('/houses/{id}', 'HousesController@show');
Route::post('/houses', 'HousesController@store');*/

//Route::resource('articles', 'ArticlesController');//this can replaces all the routs for articles above
//Route::resource('houses', 'HousesController'); //this can replace all routes for houses above



