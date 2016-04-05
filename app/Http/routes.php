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
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    // this is where our app lives 
    Route::get('/home', 'HomeController@index');
    Route::group(['prefix' => 'api'], function () {
        Route::resource('subbreddits', 'SubbredditsController', [
            'only' => ['index', 'show']
        ]);
        Route::resource('posts', 'PostsController', [
            'only' => ['index', 'show']
        ]);
        Route::resource('comments', 'CommentsController', [
            'only' => ['index', 'show']
        ]);
        Route::group(['middleware' => 'auth'], function () {
            Route::resource('subbreddits', 'SubbredditsController', [
                'only' => ['store', 'update', 'destroy']
            ]);
            Route::resource('posts', 'PostsController', [
                'only' => ['store', 'update', 'destroy']
            ]);
            Route::resource('comments', 'CommentsController', [
                'only' => ['store', 'update', 'destroy']
            ]);
        });
    });
});