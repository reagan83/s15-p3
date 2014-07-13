<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('my/page', function() {
    return "Hello world!";
});

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/books/{genre?}', function($genre = null)
{
    if ($genre == null) return "books index";
    return "Books in the {$genre} category.";
});
