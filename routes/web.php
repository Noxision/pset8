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
        Route::get('/', 'AdminController@index');
        Route::get('users', 'AdminController@editUsers')->name('editUsers');
        Route::get('posts', 'AdminController@editPosts')->name('editPosts');
    });

    Route::get('index', 'PostController@index')->name('index');
    Route::get('post', 'PostController@post')->name('essayForm');
    Route::post('post', 'PostController@putPost')->name('sendEssay');

});

