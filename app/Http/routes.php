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

// LoginController
Route::any('login',  array('as' => 'login', 'uses' => 'LoginController@showLogin'));
Route::any('handleLogin',  array('as' => 'handleLogin', 'uses' => 'LoginController@handleLogin'));
Route::any('logout',  array('as' => 'logout', 'uses' => 'LoginController@showLogout'));

// UserController
Route::any('user/dashboard',  array('as' => 'user/dashboard', 'uses' => 'UserController@showUserDashboard'));
Route::any('user/timesheet',  array('as' => 'user/timesheet', 'uses' => 'UserController@showUserTimesheet'));
