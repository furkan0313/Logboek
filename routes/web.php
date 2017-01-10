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
Route::get('/forms/{id}', 'HomeController@show');
Route::post('/example', 'HomeController@store');

Route::get('/home', 'HomeController@index');

Route::post('/logout', 'Auth\LoginController@logout');

Route::get('/docent', 'TeacherController@index');

Route::get('/docent/vakken', 'TeacherController@courses');

Route::get('/docent/grafieken','TeacherController@graphs');

Route::get('/docent/logboeken','TeacherController@journals');
Route::get('/docent/logboeken/{id}','TeacherController@showJournal');

Route::get('/docent/meldingen','TeacherController@reports');

Route::get('/docent/trajecten','TeacherController@trails');

Route::get('/docent/leerling','TeacherController@show_student');
