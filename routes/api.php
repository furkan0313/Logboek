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
Route::resource('/users', 'Api\UserController');
Route::resource('/courses', 'Api\CourseController');
Route::resource('/entries', 'Api\EntryController');
Route::resource('/groups', 'Api\GroupController');
Route::resource('/journals', 'Api\JournalController');


Route::group(['prefix' => 'groups'], function() {
    Route::resource('/users', 'Api\GroupUserController');
    Route::resource('/journals', 'Api\GroupJournalController');
    Route::resource('/courses', 'Api\GroupCourseController');
});

Route::group(['prefix' => 'journals'], function() {
    Route::resource('/entries', 'Api\JournalEntryController');
    Route::resource('/questions', 'Api\JournalQuestionController');
});
