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




Route::group(['middleware'=>['web']],function(){
Route::resource('hotels', 'HotelController');
Route::resource('regions', 'RegionController');
Route::resource('tours', 'TourController');
Route::get('/', 'StoreController@index');
Route::get('/about', 'StoreController@getAbout');
Route::get('/ourtour', 'StoreController@getOurTour');
Route::get('/ourtour/view/{id}', 'StoreController@getView');
Route::get('/hotel/{id}', 'StoreController@getHotel');
});