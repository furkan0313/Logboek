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

/* Resource routes */
Route::group(
    ['middleware' => 'jwt.auth'], function () {
        Route::resource('/users', 'Api\UserController');
        Route::resource('/courses', 'Api\CourseController');
        Route::resource('/entries', 'Api\EntryController');
        Route::resource('/groups', 'Api\GroupController');
        Route::resource('/journals', 'Api\JournalController');


        Route::resource('groups.users', 'Api\GroupUserController');
        Route::resource('groups.journals', 'Api\GroupJournalController');
        Route::resource('groups.courses', 'Api\GroupCourseController');

        Route::resource('journals.entries', 'Api\JournalEntryController');
        Route::resource('journals.questions', 'Api\JournalQuestionController');
    }
);
Route::post('/sessions', 'Api\LoginController@store');