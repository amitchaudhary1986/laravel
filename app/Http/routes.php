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
Route::get('/', 'Auth\AuthController@showLoginForm');
Route::get('auth/home', 'Auth\AuthController@showLoginForm');
//Route::get('/', 'WelcomeController@index');
Route::post('auth/login', 'Auth\AuthController@login');
Route::get('auth/register', 'Auth\AuthController@showRegistrationForm');
Route::post('auth/register', 'Auth\AuthController@register');
Route::get('auth/logout', 'Auth\AuthController@logout');
if (Request::is('admin/*'))
{
    require __DIR__.'/admin_routes.php';
}