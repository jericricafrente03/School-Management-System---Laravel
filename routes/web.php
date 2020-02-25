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

Route::get('/testing', function(){
	return view('backend.layouts.content.sample');
});

Route::get('/', 'contactuspage@index');

Route::get('/insert', 'contactuspage@insert');

Route::get('/login', 'loginController@login')->middleware('usersession')->name('login');

Route::post('/profile/user', 'loginController@checklogin');
Route::get('/logout', 'loginController@logout');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['middleware'=>['auth']], function (){
	Route::get('/user/dashboard', 'loginController@successlogin');
	Route::get('/user/themes', 'themesController@themes');
	Route::get('/user/blog', 'loginController@blog');
	Route::get('/user', 'loginController@user');
});

Route::get('/register', 'loginController@register');
Route::post('/register/store', 'loginController@store');

