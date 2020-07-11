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
    return view('category.list');
});
Route::group(['prefix' => 'category'], function(){
    Route::get('/','CategoryController@index');
    Route::get('/create','CategoryController@create');
    Route::post('/','CategoryController@store');
    Route::get('/{id}','CategoryController@edit');
    Route::post('/{id}','CategoryController@update');
    Route::get('/{id}/delete','CategoryController@destroy');

});

Route::group(['prefix' => 'product'], function(){
    Route::get('/','ProductController@index');
    Route::get('/create','ProductController@create');
    Route::post('/','ProductController@store');
    Route::get('/{id}','ProductController@edit');
    Route::post('/{id}','ProductController@update');
    Route::get('/{id}/delete','ProductController@destroy');

});