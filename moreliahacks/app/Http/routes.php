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

Route::get('/twitter/{hashtag}', function($hashtag)
{

    $twitters = Twitter::getSearch(['q'=>$hashtag,'count' => 50]);

    $sentimientos = ['negative', 'positive', 'neutral'];

    $twitters_array = $twitters->statuses;

    foreach ($twitters_array as $twitter) {

        $traduccion = TranslateClient::translate('es', 'en', $twitter->text);

        $sentimiento =  SentimentAnalysis::decision($traduccion);

        $sentimientos[] = $sentimiento;

    }

    $sentimiento_twitter = array_count_values($sentimientos);

    return view('twitter', compact('sentimiento_twitter', 'twitters_array', 'hashtag'));

});


Route::get('/sentimiento/{text}', function($text)
{

    $traduccion = TranslateClient::translate('es', 'en', $text);

    return SentimentAnalysis::decision($traduccion);
});

Route::get('/colaboradores', function () {
    return view('colaboradores');
});

//Route::get('/readme/{user}/{repository}', ['as'=>'readme.index', 'uses' => 'ApiController@index']);

Route::get('/', ['as'=>'home.index', 'uses' => 'RepositorioController@index']);

Route::get('/admin', ['as'=>'home.index', 'uses' => 'RepositorioController@index_1']);

Route::resource('repositorio', 'RepositorioController');

