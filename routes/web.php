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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Backend','middleware'=>'auth','prefix' => 'backend','as' => 'backend.'],function(){
    //后台主页
    Route::get('/', 'HomeController@index')->name('home');

    //
    Route::resource('settings', 'SettingController');
});
