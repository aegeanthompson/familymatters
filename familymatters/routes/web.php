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


//// ROUTES ////

Route::get('/', 'MembersController@index');
Route::resource('members', 'MembersController');
Route::get('members/{member}', 'MembersController@show');
// 
// Route::get('/members', 'MembersController@index');
// Route::get('/members/create', 'MembersController@create');
// Route::get('members/{member}', 'MembersController@show');
// Route::post('/members', 'MembersController@store');
// Route::get('members/{member}/edit', 'MembersController@edit')
// Route::patch('members/{member}', 'MembersController@update');
// Route::delete('members/{member}',  'MembersController@destroy');
