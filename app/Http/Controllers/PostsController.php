<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{
    public function __construct()
    {
		
	}
	public function createView($pageId)
	{
		return view('posts.create',compact('pageId'));
	}
	public function create($pageId)
	{
		$newPost = \Request::all();
		return view('posts.create');
	}
	public function editView($pageId)
	{
		return view('posts.edit',compact('pageId'));
	}
	public function edit($pageId)
	{
		$newPost = \Request::all();
		return view('posts.edit');
	}
	public function delView($pageId)
	{
		return view('posts.delete',compact('pageId'));
	}
	public function del($pageId)
	{
		$newPost = \Request::all();
		return view('posts.delete');
	}
	public function upvote($postId)
	{
		$post = Posts::where('postId','=',$postId)->first();
		$temp = $post->postKarma + 1;
		$user = DB::selectOne("SELECT * FROM users WHERE userId = $post->author;");
		$temp = $user->link_karma +1;
		DB::update("UPDATE posts SET postKarma= $temp WHERE postId = $postId;");
		DB::update("UPDATE users SET link_karma= $temp WHERE userId = $user->userId;");
		return redirect()->back();
	}
	public function downvote($postId)
	{
		
		$post = Posts::where('postId','=',$postId)->first();
		$temp = $post->postKarma - 1;
		$user = DB::selectOne("SELECT * FROM users WHERE userId = $post->author;");
		$temp = $user->link_karma -1;
		DB::update("UPDATE posts SET postKarma= $temp WHERE postId = $postId;");
		
		DB::update("UPDATE users SET link_karma= $temp WHERE userId = $user->userId;");
		return redirect()->back();
	}
}
