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

// UserController模块路由
Route::post('user/login','UserController@Login');

// TaskController模块路由
Route::post('task/show','TaskController@Show');
Route::post('task/start','TaskController@Start');
Route::post('task/submit','TaskController@Submit');
Route::get('task/prompt/latitude/{latitude?}/longitude/{longitude?}/id/{id?}/email/{email?}','TaskController@Prompt');

// BattleController模块路由
Route::post('battle/getlist', 'BattleController@getList');

Auth::routes();

Route::get('/home', 'HomeController@index');
