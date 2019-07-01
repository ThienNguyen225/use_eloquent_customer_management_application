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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'customer'], function (){
   Route::get('index', 'CustomerController@index')->name('customer.index');
   Route::get('create', 'CustomerController@create')->name('customer.create');
   Route::post('store', 'CustomerController@store')->name('customer.store');
   Route::get('{id}/show', 'CustomerController@show')->name('customer.show');
   Route::get('{id}/edit', 'CustomerController@edit')->name('customer.edit');
   Route::post('{id}/update', 'CustomerController@update')->name('customer.update');
   Route::get('{id}/delete', 'CustomerController@delete')->name('customer.delete');
   Route::post('{id}/destroy', 'CustomerController@destroy')->name('customer.destroy');
});