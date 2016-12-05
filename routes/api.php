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
Route::resource('/users', 'UserController');
Route::resource('/courses', 'CourseController');
Route::resource('/entries', 'EntryController');
Route::resource('/groups', 'GroupController');
Route::resource('/journals', 'JournalController');


Route::group(['prefix' => 'groups'], function() {
    Route::resource('/users', 'GroupUserController');
    Route::resource('/journals', 'GroupJournalController');
    Route::resource('/courses', 'GroupCourseController');
});

Route::group(['prefix' => 'journals'], function() {
    Route::resource('/entries', 'JournalEntryController');
    Route::resource('/questions', 'JournalQuestionController');
});
