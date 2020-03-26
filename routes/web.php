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



Route::group(['as' => 'app.', 'prefix' => 'app', 'namespace' => 'App', 'middleware' => ['auth']], function(){

    Route::get('settings', 'SettingController@index')->name('settings');
    Route::post('settings', 'SettingController@store')->name('settings.store');

    Route::get('header_carousel/data', 'HeaderCarouselController@data')->name('header_carousel.data');
    Route::resource('header_carousel', 'HeaderCarouselController');

    Route::get('service_carousel/data', 'ServiceCarouselController@data')->name('service_carousel.data');
    Route::resource('service_carousel', 'ServiceCarouselController');

    Route::get('value_content/data', 'ValueContentController@data')->name('value_content.data');
    Route::resource('value_content', 'ValueContentController');

    Route::get('client_testimonial/data', 'ClientTestimonialController@data')->name('client_testimonial.data');
    Route::resource('client_testimonial', 'ClientTestimonialController');

    Route::get('portofolio/data', 'PortofolioController@data')->name('portofolio.data');
    Route::resource('portofolio', 'PortofolioController');

    
});