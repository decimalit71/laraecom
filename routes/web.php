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


//Route::get('/','PersonsController@index');

Route::get('/','MyController@index');
Route::get('/about','MyController@about');
Route::get('/admin','AdminController@index');
Route::get('/admin/setting/country/create','AdminController@create')->name('create_country');
Route::post('/admin/country/store','AdminController@store')->name('store_country');
Route::get('/admin/country/show','AdminController@showCountry')->name('show_country');  
Route::get('/admin/country/{id}','AdminController@countrydetail')->where(['id'=>'[0-9]+']);  
//Route::get('/admin/country/edit/{id}','AdminController@edit');  
//Route::get('/admin/country/edit/{country}','AdminController@edit');  
Route::get('/admin/country/edit/{id}','AdminController@edit')->where(['id'=>'[0-9]+']);  
Route::patch('/admin/country/edit/{id}','AdminController@update')->where(['id'=>'[0-9]+']);  
Route::delete('/admin/country/delete/{id}','AdminController@destroy')->where(['id'=>'[0-9]+']);  