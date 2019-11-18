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

/**
 * Unsecure Display pages
 */
Route::get('/', 'Auth\LoginController@landingPage')->name('/');

Route::group(['middleware' => ['auth']], function(){
    /**
     * Dashboard Controller Display pages
     */
    //Route::get('/profile', 'Dashboard\DashboardController@profile');

    /**
     * Scopes Controller display pages
     */
    Route::get('/scopes/select', 'Auth\EsiScopeController@displayScopes');
    Route::post('redirectToProvider', 'Auth\EsiScopeController@redirectToProvider');

    /**
     * Timer Controller display pages
     */
    Route::get('/dashboard', 'Timer\TimerController@dashboard')->name('/dashboard');
    Route::get('/dashboard/past', 'Timer\TimerController@pastTimers')->name('/past');
    Route::get('/timer/form', 'Timer\TimerController@displayTimerForm');
    Route::post('/timer/store', 'Timer\TimerController@storeTimer');
    Route::post('/timer/delete', 'Timer\TimerController@deleteTimer');

    /**
     * Admin Controller display pages
     */
    Route::get('/admin/display/users', 'Admin\AdminController@displayUsers');
    Route::get('/admin/user/modify', 'Admin\AdminController@displayModifyUser');
    Route::post('/admin/user/modify', 'Admin\AdminController@modifyUser');
    Route::get('/admin/display/allowed', 'Admin\AdminController@displayAllowed');
    Route::post('/admin/allowed/new', 'Admin\AdminController@addAllowed');
    Route::post('/admin/allowed/delete', 'Admin\AdminController@deleteAllowed');
});
/*
Route::group(['middleware' => ['guest']], function() {

});
*/

/**
 * Login Display pages
 */
Route::get('/login', 'Auth\LoginController@redirectToProvider')->name('login');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback')->name('callback');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


