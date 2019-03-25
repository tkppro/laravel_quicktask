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

Route::prefix('tasks')->group(function () {
    Route::get('/', 'TaskController@index')->name('tasks.index');
    Route::post('/', 'TaskController@store')->name('tasks.store');
    Route::delete('{id}', 'TaskController@destroy')->name('tasks.delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
