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

Route::get('/',             'TaakController@index');

Route::get('/posts/index','TaakController@index');

Route::get('/posts/create','TaakController@create');

Route::post('/posts','TaakController@store');

Route::get('/posts/{post}/', 'TaakController@show');

Route::get('/posts/{id}/edit',      'PostsController@edit')->name('editpost');

Route::patch('/posts/{id}/edit',      'PostsController@update')->name('updatepost');

Route::delete('/posts/{id}/index',      'PostsController@delete')->name('deletepost');


