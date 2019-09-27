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

Route::group(['middleware' => ['auth']], function(){
    /**
     * Dashboard Controller Display pages
     */
    Route::get('/dashboard', 'Dashboard\DashboardController@index');
    Route::get('/profile', 'Dashboard\DashboardController@profile');
    
});

/**
 * Login Display pages
 */
Route::get('/login', 'Auth\LoginController@redirectToProvider')->name('login');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback')->name('callback');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

/**
 * Unsecure Display pages
 */
Route::get('/', 'Hauling\HaulingController@displayForm')->name('display');
Route::post('/', 'Hauling\HaulingController@displayFormResults');
Route::get('/display/quotes', 'Hauling\HaulingController@displayQuotes')->name('quotes');
