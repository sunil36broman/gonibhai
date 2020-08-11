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


Route::get('/', 'HomeeController@homee')->name('homee');
Route::get('/application', 'HomeeController@application')->name('application');
Route::post('/application', 'HomeeController@store')->name('store');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
    Route::resource('applications','ApplicationController');
    Route::put('/applications/update/{id}','ApplicationController@updatee')->name('updatee');
    Route::get('/allottee-manager', 'HomeController@allotteeManager')->name('allottee');
    Route::get('/downloadPDF/{id}','ApplicationController@downloadPDF');

    Route::get('/application/totals','ApplicationController@totals')->name('totals');
    Route::get('/application/pending','ApplicationController@pending')->name('pending');
    Route::get('/application/approved','ApplicationController@approved')->name('approved');
    Route::get('/application/rejected','ApplicationController@rejected')->name('rejected');
});