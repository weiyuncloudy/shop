<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/**
 * 不需要进行验证的登录方式
 */
Route::get('/', 'HomeController@index');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::get('register','Auth\AuthController@getRegister');
    Route::post('login','Auth\AuthController@postLogin');
    Route::post('register','Auth\AuthController@postRegister');
    Route::get('/', 'HomeController@index');
    Route::get('logout','Auth\AuthController@getLogout');
    Route::get('forgetPassword','Auth\PasswordController@getEmail');
    Route::post('forgetPassword','Auth\PasswordController@postEmail');
});
