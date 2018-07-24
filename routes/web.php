<?php
Route::get('/', 'HomeController@index')->name('home');
Route::get('/users', 'Ajax\UsersController@getUsers');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth', 'namespace' => 'Admin'], function () {
    Route::resource('/login-activity', 'LoginActivityController')->only(['index']);
    Route::resource('/jabtask_users', 'JabtaskUsersController');
    Route::resource('/jabtask_events', 'JabtaskEventsController');
});
