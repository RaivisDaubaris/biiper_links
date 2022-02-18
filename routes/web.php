<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

//laravel-links.com/dashboard
Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function() {

	Route::get('/links', 'LinkController@index');
	Route::get('/links/new', 'LinkController@create');
	Route::post('/links/new', 'LinkController@store');
	Route::get('/links/{link}', 'LinkController@edit');
	Route::post('/links/{link}', 'LinkController@update');
	Route::delete('/links/{link}', 'LinkController@destroy');

	Route::get('/settings', 'UserController@edit');
	Route::post('/settings', 'UserController@update');

});


Route::post('/visit/{links}', 'VisitController@store');

//laravel-links.com/username
Route::get('/{user}', 'UserController@show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
