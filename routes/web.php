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


Route::get('/', 'Front\HomeController@index')->name('home.index');
/*
 * route register store
 */
Route::get('register/store', 'Front\RegisterStoreController@register')->name('store.register');
Route::post('register/store', 'Front\RegisterStoreController@postRegister')->name('store.postRegister');
Route::any('store/login', 'Front\RegisterStoreController@login')->name('store.login');
Route::get('store/logout', 'Front\RegisterStoreController@logout')->name('store.logout');
Route::get('ajax/province', 'Front\HomeController@loadDistrictByProvince')->name('loadDistrictByProvince');

Route::group(['middleware' => 'is_store', 'prefix' => 'store'], function(){
    Route::get('/','Front\StoreController@index')->name('store.index');
    Route::get('detail/{id}', 'Front\StoreController@detailStore')->name('detailStore');

    Route::group(['prefix' => 'product'], function(){
        Route::get('/', 'Front\StoreController@listProduct')->name('listProduct');
        Route::any('create', 'Front\StoreController@create')->name('store.product.getCreate');
    });
    Route::group(['prefix' => 'order'], function (){
        Route::get('/', 'Front\StoreController@order')->name('store.order.index');
        Route::post('order/status', 'Front\StoreController@UpdateStatus')->name('store.order.status');
    });
});

//giỏ hàng
Route::get('gio-hang', 'Front\OrderController@getCart')->name('getCart');
Route::post('add/cart', 'Front\OrderController@addCart')->name('addProductToCart');
Route::post('update/cart', 'Front\OrderController@updateCart')->name('updateCart');
Route::get('delete/cart/{id}', 'Front\OrderController@deleteCart')->name('deleteCart');
Route::get('thanh-toan', 'Front\OrderController@payment')->name('payment');
Route::post('payment/2', 'Front\OrderController@postUsername')->name('postUsername');
Route::post('payment/3', 'Front\OrderController@postInfor')->name('postInfor');
Route::post('postOrder', 'Front\OrderController@postOrder')->name('postOrder');
Route::get('post/success', 'Front\Ordercontroller@success')->name('post.success');
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

     /*
      *route store
      */
    Route::group(['prefix' => 'store'], function (){
        Route::get('/','Admin\StoreController@index')->name('admin.store.index');
        Route::get('edit/{id}','Admin\StoreController@detailStore')->name('admin.store.detail');

        Route::get('delete/{id}', 'Admin\StoreController@delete')->name('admin.store.delete');


    });

    Route::group(['prefix' => 'order'], function() {
        Route::get('/', 'Admin\OrderController@index')->name('admin.order.index');
        Route::get('detail/{id}', 'Admin\OrderController@detail')->name('admin.order.detail');

        Route::get('delete/{id}', 'Admin\OrderController@delete')->name('admin.order.delete');

        Route::post('update/status', 'Admin\OrderController@updateStatus')->name('admin.order.updateStatus');
    });

    /*
     * province route
     */
    Route::group(['prefix' => 'province'], function(){
        Route::get('/', 'Admin\ProvinceController@index')->name('province.index');
        Route::get('add', 'Admin\ProvinceController@getCreate')->name('province.create');
        Route::post('add','Admin\ProvinceController@postCreate')->name('province.postCreate');

        Route::get('edit/{id}', 'Admin\ProvinceController@getEdit')->name('province.edit');
        Route::post('edit/{id}','Admin\ProvinceController@postEdit')->name('province.postEdit');

        Route::get('delete/{id}', 'Admin\ProvinceController@delete')->name('province.delete');
    });

    /*
     * district route
     */
    Route::group(['prefix' => 'district'], function(){
        Route::get('/', 'Admin\DistrictController@index')->name('district.index');
        Route::get('add', 'Admin\DistrictController@getCreate')->name('district.create');
        Route::post('add','Admin\DistrictController@postCreate')->name('district.postCreate');

        Route::get('edit/{id}', 'Admin\DistrictController@getEdit')->name('district.edit');
        Route::post('edit/{id}','Admin\DistrictController@postEdit')->name('district.postEdit');

        Route::get('delete/{id}', 'Admin\DistrictController@delete')->name('district.delete');
    });
});

Route::get('{slug}', 'Front\RootController@index')->name('root.index');