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

Route::get('/', 'WelcomeController@home');
Route::get('login', 'WelcomeController@index');
Route::get('profile', 'WelcomeController@profile');
Route::get('search', 'WelcomeController@search');

Route::get('api', 'StockController@display_data');


Route::post('portfolio/{id}', array('as'=>'portfolio', 'uses'=> 'SharesListController@index'));
Route::get('buy', 'SharesListController@buy');

Route::get('calendar', 'MeetingController@index');
Route::get('calendar/add', 'MeetingController@add');
Route::get('calendar/edit', 'MeetingController@edit');
Route::get('calendar/delete', 'MeetingController@delete');

Route::get('client-form', 'ClientController@form');
Route::post('editclient-form/{id}', array('as'=>'editclient-form', 'uses'=> 'ClientController@editform'));
Route::get('client', 'ClientController@index');
Route::post('client/add',array('as'=>'client/add','uses'=>'ClientController@Add'));
Route::post('client/edit',array('as'=>'client/edit','uses'=>'ClientController@edit'));
Route::post('client/delete/{id}', array('as'=>'client/delete', 'uses'=>'ClientController@delete'));

Route::get('fa-form', 'FaController@form');
Route::get('fa', 'FaController@index');
Route::post('fa/add', array('as'=>'fa/add','uses'=>'FaController@Add'));
Route::get('fa/edit', 'FaController@edit');
Route::post('fa/delete/{id}', array('as'=>'fa/delete', 'uses'=>'FaController@delete'));

Route::get('faclient-form', 'ClientListController@form');
Route::post('faclient/{id}', array('as'=>'faclient', 'uses'=>'ClientListController@index'));
Route::post('faclient/add', array('as'=>'faclient/add', 'uses'=>'ClientController@add'));
Route::post('faclient/delete/{id}', array('as'=>'faclient/delete', 'uses'=>'ClientController@delete'));

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
