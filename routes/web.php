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
Route::post('logout', 'Admin\AuthController@logout')->name('admin.logout');
//route admin
Route::group(['middleware' => 'admin', 'prefix' => 'backend'], function (){
    Route::get('/', 'Admin\DashboardController@index')->name('admin.index');
    Route::any('profile', 'Admin\AuthController@profile')->name('admin.profile');
    /**
    category route
     */
     Route::group(['prefix' => 'category'], function (){
        Route::get('/', 'Admin\CategoryController@index')->name('admin.category.index');
        Route::any('create','Admin\CategoryController@create')->name('admin.category.create');
        Route::any('edit/{id}','Admin\CategoryController@create')->name('admin.category.edit');
        Route::get('delete/{id}', 'Admin\CategoryController@delete')->name('admin.category.delete');
     });
     /*
      * product route
      */
     Route::group(['prefix' => 'product'], function(){
        Route::get('/', 'Admin\ProductController@index')->name('admin.product.index');
        Route::any('create', 'Admin\ProductController@create')->name('admin.product.create');
        Route::any('edit/{id}', 'Admin\ProductController@create')->name('admin.product.edit');
        Route::get('delete/{id}', 'Admin\ProductController@delete')->name('admin.product.delete');
     });
});