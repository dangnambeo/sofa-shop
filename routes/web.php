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
    return view('welcome');
});

//Route::group(['prefix' => '/'],function (){
    //Quản lý người dùng
    Route::group(['prefix' => 'admin'],function (){
        //Danh sách nhân viên
        Route::get('/list-staff','userController@listUser')->name('list-user');
        //Thêm mới nhân viên
        Route::get('/add-staff','userController@getAddUser')->name('getAdd-user');
        Route::post('/post-Adduser','userController@postAddUser')->name('postAdd-user');
        //Chỉnh sửa nhân viên
        Route::get('/edit-staff={id}','userController@getEditUser')->name('edit-staff');
        Route::post('/postEdit-staff/{id}','userController@postEditUser')->name('postEdit-staff');
        //Xóa nhân viên
        Route::get('/del-staff/{id}','userController@DelUser')->name('del-staff');
    });
    //Quản lý chuyên mục
    Route::group(['prefix' => 'cate'],function (){
        //Danh sách chuyên mục
        Route::get('/chuyenmuc','categoryController@ListCate')->name('list-cate');
        //Thêm mới
        Route::post('/postAdd-cate','categoryController@postAddCate')->name('post-add-cate');
        //Sửa
        Route::get('/edit-cate={id}','categoryController@getEditCate')->name('edit-cate');
        Route::post('/postEdit-cate/{id}','categoryController@postEditCate')->name('post-edit-cate');
        //Xóa
        Route::get('/delcate/{id}','categoryController@DelCate')->name('del-cate');
    });
    Route::group(['prefix' => 'products'],function (){
        //Danh sách
        Route::get('/','productsController@ListProduc')->name('list-produc');
    });
    Route::group(['prefix' => 'discount'],function (){
        Route::get('/','discountController@Listdiscount')->name('listdiscount');

        Route::get('/add-discount','discountController@getAdddDiscount')->name('add-discount');
        Route::post('/post-add-discount','discountController@postAddDiscount')->name('post-add-discount');
    });
//});
