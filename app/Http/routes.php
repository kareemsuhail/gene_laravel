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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/main', 'main@main');
Route::get('/get', 'main@get');
Route::post('/table', 'main@table');
Route::post('/save', 'main@save');
Route::get('/meals', 'main@meals');
Route::get('/search_view', 'main@search_view');
Route::post('/search', 'main@search');
Route::get('/search/{wno}/{pno}', 'main@search_id');
Route::get('/search/search/{wno}/{pno}', 'main@search_id');
Route::get('/delete/{id}', 'main@delete_id');
Route::get('/search/delete/{id}', 'main@delete_id');
Route::get('/choices_show', 'main@choices_show');
Route::post('/choices/update', 'main@choices_update');
Route::get('/choices/delete/{id}', 'main@choices_delete');
Route::post('/search/date', 'main@search_date');
Route::get('/choices/add_view', 'main@choices_add_view');
Route::post('/choices/choices/add', 'main@choices_add');
Route::get('/ajax/{id}', 'main@ajax');






