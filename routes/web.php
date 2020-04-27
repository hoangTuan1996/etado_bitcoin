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

Route::group(['middleware' => ['admin'], 'namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin'], function () {
    //Dashboard
    Route::get('/', 'DashboardController@index');
    Route::get('dashboards', 'DashboardController@index')->name('dashboard');

    //Admin
    Route::resource('users', 'AdminController');
    Route::get('user/delete/{id}', 'AdminController@delete')->name('users.delete');
    Route::post('users/{user}', 'AdminController@update')->name('users.update');
    Route::get('data-users', 'AdminController@anyData')->name('users.data');
    Route::delete('users/delete-multi', 'AdminController@destroy')->name('users.delMulti');

    //Account
    Route::resource('accounts', 'AccountController');
    Route::get('account/delete/{id}', 'AccountController@delete')->name('accounts.delete');
    Route::post('accounts/{user}', 'AccountController@update')->name('accounts.update');
    Route::get('data-accounts', 'AccountController@anyData')->name('accounts.data');
    Route::delete('accounts/delete-multi', 'AccountController@destroy')->name('accounts.delMulti');
//    Route::get('users', 'DashboardController@showUserLogin')->name('users.index');
    //user key
    Route::get('users-pinetwork', 'DashboardController@showUser')->name('usersPinetwork.index');
    Route::get('user-key-network/1/view', 'DashboardController@showUserProfile')->name('usersPinetwork.view');
});

//Route::group(['middleware' => ['web'], 'namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin'], function () {
Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::resource('login', 'LoginController');
});
