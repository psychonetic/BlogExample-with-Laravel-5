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

Route::group(['namespace' => 'Blog'], function() {
	Route::get('/', ['uses' => 'BlogController@getIndex']);
	Route::get('blog', 			['as' => 'blog.index', 	'uses' => 'BlogController@getIndex']);
	Route::get('blog/create', 	['as' => 'blog.create', 'uses' => 'BlogController@getCreate']);
	Route::get('blog/{blog}', 	['as' => 'blog.show', 	'uses' => 'BlogController@getShow']);

	Route::post('blog',			['as' => 'blog.store', 'uses' =>  'BlogController@postStore']);
});


