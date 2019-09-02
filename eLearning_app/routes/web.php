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

Auth::routes();

Route::group(['middleware' => 'auth'] ,function() {
    Route::get('/home', 'HomeController@home')->name('home');

    Route::get('/users', 'UserController@showUsers');
    Route::get('/user/edit/{id}', 'UserController@edit')->where('id' , '[0-9]+');
    Route::post('/user/storeEdit/{id}', 'UserController@editStore')->where('id' , '[0-9]+');
    Route::get('/user/followinglist', 'UserController@showFollowing');
    Route::get('/user/followerslist', 'UserController@showFollowers');
    Route::get('/user/followinglist/{id}', 'UserController@showOtherUserFollowing');
    Route::get('/user/followerslist/{id}', 'UserController@showOtherUserFollowers');
    Route::get('/user/edit/password/{id}', 'UserController@changePassword');
    Route::post('/user/storePassword/{id}', 'UserController@passwordStore');
    Route::get('/user/profile/{id}', 'UserController@showUser');
    Route::get('/user/follow/{id}', 'UserController@follow');
    Route::get('/user/unfollow/{id}', 'UserController@unfollow');

    Route::get('/lessons', 'LessonController@showLessons');
    Route::get('/lessons/content/{id}', 'LessonController@showQuestions')->where('id' , '[0-9]+');
    Route::post('/lessons/content/answer/{id}', 'LessonController@showAnswers');
    Route::get('/lessons/content/new', 'LessonController@newLessons');
    Route::post('/lesson/content/storeLesson', 'LessonController@storeNewLessons');
    Route::get('/lessons/content/{id}/edit', 'LessonController@edit');
    Route::post('/lesson/content/{id}/store', 'LessonController@storeEdit');
    Route::get('/lessons/content/{id}/delete', 'LessonController@delete');

    Route::get('/lesson/{id}/questions', 'QuestionController@show');
    Route::get('/lesson/{id}/questions/create', 'QuestionController@new');
    Route::post('/lesson/{id}/questions/storeQuestion/', 'QuestionController@store');
    Route::get('/lessons/{id}/question/edit', 'QuestionController@edit');
    Route::post('/lesson/{id}/questions/storeEdit/', 'QuestionController@storeEdit');
    Route::get('/lessons/{id}/question/delete', 'QuestionController@delete');

});
