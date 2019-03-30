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
Route::get('/page/create','PageController@createView');
Route::post('/page/create','PageController@create');
Route::get('/profile/{username}', 'UserController@profile');
Route::get('/rr/{subreddit}', "HomeController@page");
Route::get('/rr/{subreddit}/post/create', "PostsController@create");
Route::get('/rr/{subreddit}/post/insert', "PostsController@insert");
Route::get('/myroute', "HomeController@insert");

Auth::routes();

