<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/heroes', 'HeroController@index')->name('admin.heroes');
Route::get('/admin/items', 'ItemController@index')->name('admin.items');
Route::get('/admin/enemies', 'EnemyController@index')->name('admin.enemies');
