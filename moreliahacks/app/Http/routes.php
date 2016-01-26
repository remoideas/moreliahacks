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

Route::get('/translate/{word}', function ($word) {

});

Route::get('/twitter/{hashtag}', function($hashtag)
{

    if ( !Cache::has('sentimiento_twitter') ) {


    $twitters = Twitter::getSearch(['q'=>$hashtag,'count' => 50]);

    //$sentimientos = ['negative', 'positive', 'neutral'];
    $sentimientos = [];

    $twitters_array = $twitters->statuses;

    foreach ($twitters_array as $key => $twitter) {

        //$traduccion = TranslateClient::translate('es', 'en', $twitter->text);

        $url = Laracurl::buildUrl('https://www.googleapis.com/language/translate/v2', [
        'q' => $twitter->text,
        'target' => 'en',
        'source' => 'es',
        'key' => 'AIzaSyCYYNvP_GnR6RW8U6btkG9phbJD4Lcd1MQ'
        ]);
        $response = json_decode( Laracurl::get($url) );
        $traduccion = $response->data->translations[0]->translatedText;

        $sentimientos[$key] =  SentimentAnalysis::decision($traduccion);

        $twitters_array[$key]->sentimiento = $sentimientos[$key];

        /*
        $json = file_get_contents('https://sentimental-language.herokuapp.com/translate?text=' . urlencode($twitter->text));
        $obj = json_decode($json);

        if( $obj->data->score == 0 ){

            $sentimientos[] = 'neutral';

        } elseif( $obj->data->score < 0 ){

            $sentimientos[] = 'negative';

        } elseif( $obj->data->score > 0 ){

            $sentimientos[] = 'positive';

        }
        */

    }

    $sentimiento_twitter = array_count_values($sentimientos);

    Cache::put('sentimiento_twitter', $sentimiento_twitter, 360);
    Cache::put('twitters_array', $twitters_array, 360);
    Cache::put('hashtag', $hashtag, 360);

            //
    }


    $sentimiento_twitter = Cache::get('sentimiento_twitter');
    $twitters_array = Cache::get('twitters_array');
    $hashtag = Cache::get('hashtag');


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

