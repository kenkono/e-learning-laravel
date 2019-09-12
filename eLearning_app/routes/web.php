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

    // user function
    Route::group(['prefix' => 'user'], function()
    {
        // show all users
        Route::get('', 'UserController@showUsers');

        // edit user profile and password
        Route::group(['prefix' => 'edit'], function()
        {
            Route::get('{id}', 'UserController@edit')->where('id' , '[0-9]+');
            Route::get('password/{id}', 'UserController@changePassword');
        });

        // Following
        Route::group(['prefix' => 'followinglist'], function()
        {
            Route::get('', 'UserController@showFollowing');
            Route::get('{id}', 'UserController@showOtherUserFollowing');
        });

        // Followers
        Route::group(['prefix' => 'followerslist'], function()
        {
            Route::get('', 'UserController@showFollowers');
            Route::get('{id}', 'UserController@showOtherUserFollowers');
        });

        // store user profile and password
        Route::group(['prefix' => 'store'], function()
        {
            Route::post('edit/{id}', 'UserController@editStore')->where('id' , '[0-9]+');
            Route::post('password/{id}', 'UserController@passwordStore');
        });

        // show user profile
        Route::get('profile/{id}', 'UserController@showUser');
        // follow other user
        Route::get('follow/{id}', 'UserController@follow');
        // unfollow other user
        Route::get('unfollow/{id}', 'UserController@unfollow');
    });

    // lesson function
    Route::group(['prefix' => 'lesson'], function()
    {
        // show all lessons
        Route::get('', 'LessonController@showLessons');

        // lesson CRUD
        Route::group(['prefix' => 'content'], function()
        {
            Route::get('{id}', 'LessonController@showQuestions')->where('id' , '[0-9]+');
            Route::post('answer/{id}', 'LessonController@showAnswers');
            Route::get('new', 'LessonController@newLessons');
            Route::get('{id}/edit', 'LessonController@edit');
            Route::post('{id}/delete', 'LessonController@delete');
        });

    });

    Route::group(['prefix' => 'lesson/{id}'], function()
    {
        // edit and delete question 
        Route::group(['prefix' => 'question'], function()
        {
            Route::get('edit', 'QuestionController@edit');
            Route::get('delete', 'QuestionController@delete');
        });

        // make and store question
        Route::group(['prefix' => 'questions'], function()
        {
            Route::get('', 'QuestionController@show');
            Route::get('create', 'QuestionController@new');
            Route::post('storeQuestion/', 'QuestionController@store');
            Route::post('storeEdit/', 'QuestionController@storeEdit');
        });

    });

    Route::group(['prefix' => 'lesson/content'], function()
    {
        // store new and edit lessons
        Route::post('{id}/store', 'LessonController@storeEdit');
        Route::post('storeLesson', 'LessonController@storeNewLessons');
    });
});
