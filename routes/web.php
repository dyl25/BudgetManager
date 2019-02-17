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

Route::middleware('auth')->group(function() {
    Route::get('/', 'HomeController@index');

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/mainaccount/create', 'MainAccountController@create')->name('mainaccounts.create');
    Route::post('/mainaccount/store', 'MainAccountController@store')->name('mainaccounts.store');

    Route::get('/manage/accounts/create', 'ManagerController@create')->name('managers.create');
    Route::post('/manage/accounts/store', 'ManagerController@store')->name('managers.store');
    Route::get('/manage/accounts/{mainAccount}', 'ManagerController@index')->name('managers.index');
});

Auth::routes();
