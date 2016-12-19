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

Route::get('/login', 'Auth\LoginController@ShowLoginForm');

Route::post('/login', 'Auth\LoginController@Login');

Route::get('/example', 'HomeController@create');
Route::post('/example', 'HomeController@store');
Route::get('/home', 'HomeController@index');

Route::post('/logout', 'Auth\LoginController@logout');

Route::get('/docent', 'DocentenController@index');

Route::get('/docent/vakken', 'DocentenController@courses');

Route::get('/docent/grafieken','DocentenController@graphs');

Route::get('/docent/logboeken','DocentenController@journals');

Route::get('/docent/meldingen','DocentenController@reports');

Route::get('/docent/trajecten','DocentenController@trails');

Route::get('/docent/leerling','DocentenController@show_student');