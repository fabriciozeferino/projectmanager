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



Route::group([

    'middleware' => ['web', 'auth']

], function () {

    Route::get('project', 'ProjectController@index');
    Route::get('project/{project}', 'ProjectController@show');
    Route::post('project', 'ProjectController@store');
    Route::put('project/{project}', 'ProjectController@update');
    Route::delete('project/{project}', 'ProjectController@delete');

    Route::get('project/{project}/task', 'TaskController@index');
    Route::get('project/{project}/task/{task}', 'TaskController@show');
    Route::post('project/{project}/task', 'TaskController@store');
    Route::put('project/{project}/task/{task}', 'TaskController@update');
    Route::delete('project/{project}/task/{task}', 'TaskController@delete');
});






