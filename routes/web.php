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
    Route::group(['prefix' => 'admin'],function (){
        //Danh sách nhân viên
        Route::get('/list-staff','userController@listUser')->name('list-user');
        //Thêm mới nhân viên
        Route::get('/add-staff','userController@getAddUser')->name('getAdd-user');
        Route::post('/post-Adduser','userController@postAddUser')->name('postAdd-user');
        //Chỉnh sửa nhân viên
        Route::get('/edit-staff={id}','userController@getEditUser')->name('edit-staff');
        Route::post('/postEdit-staff={id}','userController@getEditUser')->name('postEdit-staff');
        //Xóa nhân viên
    });
//});
