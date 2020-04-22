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

Route::get('pitago', 'PitagoController@index');
Route::post('pitago', 'PitagoController@post')->name('pitago');


Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::get('dashboards', 'DashboardController@index')->name('dashboard');
    Route::get('users', 'DashboardController@showUser')->name('users.index');
});
