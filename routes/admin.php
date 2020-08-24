<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

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

// Admin Route with Auth , Note that here is prefix 'admin' for the file
Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin'], function () {

    Route::get('/','DashboardController@index')->name('Dashboard.index');
});

// Admin Route Public
Route::group(['namespace' => 'Dashboard','middleware' => 'guest:admin'], function () {

Route::get('login','LoginController@Login')->name('admin.login');
Route::post('login','LoginController@postLogin')->name('admin.Post.login');
});
