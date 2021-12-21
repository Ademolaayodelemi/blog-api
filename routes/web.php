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

// Admin Routing
Route::get('admin','AdminController@index');
Route::get('admin/login','AdminController@login');
Route::post('admin/login','AdminController@submit_login');
Route::get('admin/logout','AdminController@logout');

// Setting Routing
Route::get('admin/settings','SettingController@index');
Route::get('admin/setting/logo','SettingController@logo');

// Posts Routing
Route::get('admin/posts','PostController@index');
Route::get('admin/post/add','PostController@create');
Route::post('admin/post/add','PostController@store');
Route::get('admin/post/update/{id}','PostController@edit');
Route::post('admin/post/update/{id}','PostController@update');
Route::get('admin/post/delete/{id}','PostController@destroy');

// Category Routing
Route::get('admin/categories','CategoryController@index');
Route::get('admin/category/add','CategoryController@create');
Route::post('admin/category/add','CategoryController@store');
Route::get('admin/category/update/{id}','CategoryController@edit');
Route::post('admin/category/update/{id}','CategoryController@update');
Route::get('admin/category/delete/{id}','CategoryController@destroy');

// Comment Routing
Route::get('admin/comments','CommentController@index');
Route::get('admin/comment/update/{status}/{id}','CommentController@update');
Route::get('admin/comment/delete/{id}','CommentController@destroy');

// Subscriber Routing
Route::get('admin/subscribers','AdminController@subscribers');
Route::get('admin/subscriber/delete/{id}','AdminController@destroy');

// Setting Routing
Route::get('admin/settings','SettingController@index');
Route::post('admin/setting/logo_update','SettingController@submit_logo');

// ==================== Frontend Routing
Route::get('/','HomeController@index');
Route::get('categories','HomeController@categories');
Route::get('category/{slug}/{id}','HomeController@category');
Route::get('tags','HomeController@tags');
Route::get('tag/{slug}','HomeController@tag');
Route::get('post/{slug}/{id}','HomeController@postdetail');
Route::post('comment/{slug}/{id}','HomeController@submit_comment');
Route::post('subscribe','HomeController@subscribe');
