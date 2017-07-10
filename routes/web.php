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

Route::get('/', 'SiteController@welcome')->name('welcome');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', 'SiteController@home')->name('home');
    Route::group(['middleware' => 'banned'], function () {
        Route::group(['prefix' => 'admin',  'middleware' => 'admin'], function () {
            Route::get('index', 'SiteController@adminIndex')->name('adminIndex');
            Route::resource('users', 'UserController');
            Route::resource('posts', 'PostController');
            Route::group(['prefix' => 'trash'], function () {
                Route::get('posts', 'PostController@trash')->name('posts.trash');
                Route::patch('posts/{id}/restore', 'PostController@restore')->name('posts.restore');
                Route::get('users', 'UserController@trash')->name('users.trash');
                Route::patch('users/{id}/restore', 'UserController@restore')->name('users.restore');
            });
        });

        Route::resource('posts', 'PostController', ['only' => [
            'create', 'store'
        ]]);
        Route::get('index', 'SiteController@index')->name('index');
    });
});
