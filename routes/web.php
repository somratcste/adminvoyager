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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');

Route::get('session/get', 'SessionController@getSession');
Route::get('session/put', 'SessionController@putSession');
Route::get('session/forget', 'SessionController@forgetSession');

Route::get('/uploadfile', 'FileuploadingController@index');
Route::post('/uploadfile', 'FileuploadingController@showfileupload');