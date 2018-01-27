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
Route::get('/novidades', ['uses'=> 'Novidades@index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'], function (){
    Route::get('/', ['uses'=> 'AdminController@index']);
    Route::get('/novidades', ['uses'=> 'AdminController@novidades']);
    Route::get('/atleticas', ['uses'=> 'AdminController@atleticas']);
});