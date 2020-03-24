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

Route::view('/', 'main');

Auth::routes([
    'register' => true
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('app/settings', 'App\SettingController@index')->name('app.settings');
    Route::post('app/settings', 'App\SettingController@store')->name('app.settings.store');
});