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
Route::resource('v1/tasks', 'TaskController', ['onli' => ['index', 'store', 'show', 'update', 'destroy']]);

Route::resource('v1/users', 'UserController', 
['onli' => ['index', 'login', 'logout']]);

Route::post('v1/login', 'UserController@login');

Route::get('v1/loly', 'TaskController@loly')->middleware('auth:api');
