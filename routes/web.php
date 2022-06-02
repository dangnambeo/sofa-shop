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

Route::get('/login','userController@getLogin')->name('login');
Route::post('/post-login','userController@postLogin')->name('post-login');

Route::get('/logout','userController@getLogout')->name('logout');

Route::group(['middleware' => 'auth'],function (){
    Route::group(['prefix' => 'admin'],function (){
        //Quản lý người dùng
        Route::group(['prefix' => 'staff'],function (){
            //Danh sách nhân viên
            Route::get('/','userController@listUser')->name('list-user');
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
            Route::get('/','categoryController@ListCate')->name('list-cate');
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

            Route::get('/them-sanpham','productsController@getAddProducts')->name('add-products');
            Route::post('/post-addSP','productsController@postAddProducts')->name('post-add-products');

            Route::get('/{id}','productsController@getEditProducts')->name('products-edit');
            Route::post('/post-edit-sp/{id}','productsController@postEditProducts')->name('products-edit-post');

            Route::get('/delSP/{id}','productsController@DelProducts')->name('del-products');
        });
        Route::group(['prefix' => 'discount'],function (){
            Route::get('/','discountController@Listdiscount')->name('listdiscount');

            Route::get('/add-discount','discountController@getAdddDiscount')->name('add-discount');
            Route::post('/post-add-discount','discountController@postAddDiscount')->name('post-add-discount');

            Route::get('/edit-discount={id}','discountController@getEditDiscount')->name('discount-edit');
            Route::post('/postEdit-discout/{id}','discountController@postEditDiscount')->name('post-edit-discount');

            Route::get('/del-discount/{id}','discountController@DelDiscount')->name('del-discount');
        });
        Route::group(['prefix' => 'slide'],function (){
            Route::get('/','slideController@listSlide')->name('slide');

            Route::get('/them-slide','slideController@addSlide')->name('add-slide');
            Route::post('/post-them-slide','slideController@postAddSlide')->name('post-add-slide');

            Route::get('/sua-slide/{id}','slideController@editSlide')->name('edit-slide');
            Route::post('/post-sua-slide/{id}','slideController@postEditSlide')->name('post-edit-slide');

            Route::get('/xoa-slide/{id}','slideController@delSlide')->name('del-slide');
        });
    });
});

Route::group(['prefix' => '/'],function (){
   Route::get('/Trangchu','pageController@Index')->name('index');
   Route::get('/gheSofa','pageController@viewall')->name('viewall');

   Route::get('/danhmuc/{id}','pageController@viewpage')->name('viewpage');

   Route::get('/sanpham/{id}','pageController@viewproducts')->name('viewproducts');
});
