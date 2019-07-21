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



Route::group(['middlewareGroups' => 'web'], function () {

	Route::auth();
	
	Route::get('cards', 'CardsController@index');
	Route::get('cards/{card}', 'CardsController@show');
	
	Route::post('cards/{card}/notes', 'NotesController@store');
	Route::get('/notes/{note}/edit', 'NotesController@edit');
	Route::patch('notes/{note}', 'NotesController@update');

	Route::get('/home', 'HomeController@index');
});




Route::get('/', 'WelcomeController@index');


