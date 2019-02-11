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

    Route::get('/home', function () {
        return redirect('project');
    });

    Route::get('project', 'ProjectController@index');
    Route::get('project/{project}', 'ProjectController@show');
    Route::post('project', 'ProjectController@store');
    Route::put('project/{project}', 'ProjectController@update');
    Route::delete('project/{project}', 'ProjectController@destroy');

    Route::get('project/{project}/task', 'TaskController@index');
    Route::get('project/{project}/task/{task}', 'TaskController@show');
    Route::post('project/{project}/task', 'TaskController@store');
    Route::put('project/{project}/task/{task}', 'TaskController@update');
    Route::delete('project/{project}/task/{task}', 'TaskController@destroy');

    Route::get('role', 'RoleController@index');
    Route::get('role/{role}', 'RoleController@show');
    Route::post('role', 'RoleController@store');
    Route::put('role/{role}', 'RoleController@update');
    Route::delete('role/{role}', 'RoleController@destroy');

    Route::get('permission', 'PermissionController@index');
    Route::get('permission/{permission}', 'PermissionController@show');
    Route::post('permission', 'PermissionController@store');
    Route::put('permission/{permission}', 'PermissionController@update');
    Route::delete('permission/{permission}', 'PermissionController@destroy');

    Route::get('user', 'UserController@index');
    Route::get('user/{user}', 'UserController@show');
    Route::post('user', 'UserController@store');
    Route::put('user/{user}', 'UserController@update');
    Route::delete('user/{user}', 'UserController@destroy');
});






