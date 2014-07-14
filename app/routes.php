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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/loremipsum/{paragraphs?}', function($paras = 0)
{
    $data["paras"] = $paras;
    return View::make('loremipsum', $data);
})->where('paragraphs', '[0-9]+');

Route::get('/useripsum/{count?}', function($count = 0)
{
    $data["usercount"] = $count;
    return View::make('useripsum', $data);
})->where('count', '[0-9]+');
