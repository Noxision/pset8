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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'admin',  'middleware' => 'admin'], function () {
        Route::get('index', 'AdminController@index')->name('adminIndex');
        Route::get('users', 'AdminController@editUsers')->name('users');
        Route::get('posts', 'AdminController@editPosts')->name('posts');
        Route::get('posts/edit/{id}', 'AdminController@updatePost')->name('postEdit');
        Route::post('posts/delete/{id}', 'PostController@deletePost')->name('postDelete');
        Route::post('post/edit/{id}', 'PostController@editPost')->name('edit');
        Route::get('users/edit/{id}', 'AdminController@updateUser')->name('userEdit');
        Route::post('users/delete/{id}', 'AdminController@deleteUser')->name('userDelete');
        Route::post('user/edit/{id}', 'AdminController@editUser')->name('updateUser');
    });

    Route::get('index', 'PostController@index')->name('index');
    Route::get('post', 'PostController@post')->name('essayForm');
    Route::post('post', 'PostController@putPost')->name('sendEssay');
});
