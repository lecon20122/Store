<?php

use App\Http\Controllers\Dashboard\SettingsController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    // Admin Route with Auth , Note that here is prefix 'admin' for the file
    Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin', 'prefix' => 'admin'], function () {

        Route::get('/', 'DashboardController@index')->name('Dashboard.index');
        //Settings Routes with prefix -> settings
        Route::group(['prefix' => 'settings'], function () {

            Route::get('shipping-methods/{type}', 'SettingsController@edit')->name('Shipping.Methods.Edit');
            Route::get('shipping-methods', function () {
                return view('dashboard.settings.shippings.edit');
            })->name('Shipping.Methods');
            Route::post('shipping-methods/{type}', 'SettingsController@update')->name('Shipping.Methods.Update');
        });

        Route::get('logout', 'LoginController@Logout')->name('admin.logout');
    });

    // Admin Route Public
    Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin', 'prefix' => 'admin'], function () {

        Route::get('login', 'LoginController@Login')->name('admin.login');
        Route::post('login', 'LoginController@postLogin')->name('admin.Post.login');
    });
});
