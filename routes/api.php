<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Endpoint de testeo
Route::get('/', 'APIController@index');

// Endpoint de heroes
Route::get('heroes', 'APIController@getAllHeroes');
Route::get('heroes/{id}', 'APIController@getHeroe');

// Endpoint de enemies
Route::get('enemies', 'APIController@getAllEnemies');
Route::get('enemies/{id}', 'APIController@getEnemy');

// Endpoint de items
Route::get('items', 'APIController@getAllItems');
Route::get('items/{id}', 'APIController@getItem');