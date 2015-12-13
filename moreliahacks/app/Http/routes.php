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

use GrahamCampbell\Markdown\Facades\Markdown;


Route::get('/original', function () {
    return view('inicio-original');
});

Route::get('/twitter', function()
{
    return Twitter::postTweet(['status' => 'morelia', 'format' => 'json']);
});


Route::get('/sentimiento/{text}', function($text)
{
    return SentimentAnalysis::decision($text);
});

Route::get('/perfil', function () {
    return view('apis');
});

//Route::get('/readme/{user}/{repository}', ['as'=>'readme.index', 'uses' => 'ApiController@index']);

Route::get('/', ['as'=>'home.index', 'uses' => 'RepositorioController@index']);

Route::get('/admin', ['as'=>'home.index', 'uses' => 'RepositorioController@index_1']);

Route::resource('repositorio', 'RepositorioController');