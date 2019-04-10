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
Route::group(['middleware' => ['auth']],function(){
Route::get('/page/create','PageController@createView');
Route::post('/page/create','PageController@create');
Route::get('/page/edit/{pageID}','PageController@editView');
Route::post('/page/edit/{pageID}','PageController@edit');
Route::get('/page/delete/{pageID}','PageController@delView');
Route::post('/page/delete/{pageID}','PageController@del');
Route::post('/follow/{pageID}','FollowController@follow');

Route::post('/unfollow/{pageID}','FollowController@unfollow');
Route::get('/rr/{subreddit}/post/create', "PostsController@createView");
Route::post('/rr/{subreddit}/post/create', "PostsController@create");
Route::get('/rr/{subreddit}/post/edit/{postId}', "PostsController@editView");
Route::post('/rr/{subreddit}/post/edit/{postId}', "PostsController@edit");
Route::get('/rr/{subreddit}/post/delete/{postId}', "PostsController@delView");
Route::post('/rr/{subreddit}/post/delete/{postId}', "PostsController@del");
Route::post('/post/upvote/{postId}', "PostsController@upvote");
Route::post('/post/downvote/{postId}', "PostsController@downvote");
});
Route::get('/profile/{username}', 'UserController@profile');
Route::get('/rr/{pageID}', "HomeController@page");
Route::get('/myroute', "HomeController@insert");

Auth::routes();

