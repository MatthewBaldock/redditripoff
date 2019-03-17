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

Route::get('/', "HomeController@home");
Route::get('/home',  function () {
    return redirect('/');
});
Route::get('/rr',   function () {
    return redirect('/');
});
Route::get('/profile/{username}', 'UserController@profile');
Route::get('/rr/{pageId}', "HomeController@page");
Route::get('/rr/{pageId}/post/create', "PostsController@create");
Route::get('/rr/{pageId}/post/insert', "PostsController@insert");
Route::get('/myroute', "HomeController@insert");

Auth::routes();

