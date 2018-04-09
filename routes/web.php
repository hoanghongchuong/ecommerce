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

//auth route
Route::any('/login', 'Admin\AuthController@login')->name('admin.login');
//route admin
Route::group(['middleware' => 'admin', 'prefix' => 'backend'], function (){
    Route::get('/', 'Admin\DashboardController@index')->name('admin.index');
    
    /**
    category route
     */
    // Route::get(['prefix' => 'category', 'as' => 'category.'], function(){
    // 	Route::get('/', 'Admin\CategoryController@index')->name('index');
    // 	Route::any('create', 'Admin\CategoryController@create')->name('create');
    // 	Route::any('edit/{id}', 'Admin\CategoryController@create')->name('edit');
    // 	Route::post('delete/{id}', 'Admin\CategoryController@delete')->name('delete');
    // });
});