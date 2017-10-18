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

// Route::get('/', function () {
//     return view('index');
// });

// Home 模块
Route::group(['namespace' => 'Home'], function () {
    // 首页
    Route::get('/', 'IndexController@index');
    // 分类
    Route::get('category/{id}', 'IndexController@category');
    // 文章
    Route::get('article', 'IndexController@article');
    // 注册
    Route::get('login', 'IndexController@login');
    // 标签
    Route::get('register', 'IndexController@register');
    // 随言碎语
    Route::get('destroy/{id}', 'IndexController@destroy');
    // 开源项目
    Route::get('index', 'IndexController@index');
    // 文章详情
});

// Admin 模块
Route::group(['namespace' => 'Admin'], function () {
    // 首页
    Route::get('admin', 'IndexController@index');
    // 分类

});