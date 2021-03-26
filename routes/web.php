<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth','namespace' => 'App\Http\Controllers'], function () {
    Route::get('/dashboard','Dashboard\DashboardController@index')->name('dashboard');

    Route::group(['as' => 'brand.', 'prefix' => 'brand',], function () {
        Route::get('', 'Brand\BrandController@index')->name('index');
        Route::get('brand-data', 'Brand\BrandController@getAllData')->name('data');
        Route::get('create', 'Brand\BrandController@create')->name('create');
        Route::post('', 'Brand\BrandController@store')->name('store');
        Route::get('{brand}/edit', 'Brand\BrandController@edit')->name('edit');
        Route::put('{brand}', 'Brand\BrandController@update')->name('update');
        Route::get('brand/{id}/destroy', 'Brand\BrandController@destroy')->name('destroy');
    });

});
