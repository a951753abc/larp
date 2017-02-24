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


Route::resource('event', 'EventController');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/event.show/{id}', 'EventController@eventShow');
Route::get('/admin/{type}', 'EventController@adminIndex');
Route::get('/user.event/{event_id}/create', 'UserEventController@create');
Route::post('/user.event', 'UserEventController@store');
