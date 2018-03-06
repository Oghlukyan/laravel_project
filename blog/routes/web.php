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

Route::get('/admin', 'AdminController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/users-list', 'AdminController@getUsers');
    Route::get('/admins-list', 'AdminController@getAdmins');
    Route::prefix('/menus')->group(function() {
        Route::get('/', 'MenuController@get');
        Route::post('/add', 'MenuController@store')->name('admin.menus.modification.add');
        Route::post('/edit', 'MenuController@store')->name('admin.menus.modification.edit');
        Route::post('/store', 'MenuController@remove')->name('admin.menus.modification.delete');
    });
});
