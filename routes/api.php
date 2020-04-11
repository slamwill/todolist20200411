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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('api-showListTodo', 'API\TodoController@getListTodo');
Route::post('api-createListTodo', 'API\TodoController@createListTodo');
Route::post('api-updateListTodo', 'API\TodoController@updateListTodo');
Route::post('api-deleteListTodo', 'API\TodoController@deleteListTodo');
