<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use Illuminate\Support\Facades\DB;
use Auth;
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
		DB::insert("INSERT INTO Posts (author,postTitle,commentText,pageId,parentCommentId,link)
			VALUES(".Auth::user()->userId.",'".$newPost['postTitle']."','".$newPost['commentText']."',".$pageId.",0,'');");
		return redirect('/rr/'.$pageId);
	}
	public function editView($pageId,$postId)
	{
		if(Auth::user()->userId != DB::selectOne("SELECT author FROM posts WHERE postId = $postId")->author)
		{
			return redirect('/');
		}
		$post = DB::selectOne("SELECT * FROM posts WHERE postId = $postId AND pageId = $pageId;");
		return view('posts.edit',compact('pageId','postId','post'));
	}
	public function edit($pageId,$postId)
	{
		$newPost = \Request::all();
		DB::selectOne("UPDATE posts SET postTitle ='".$newPost['postTitle']."', commentText='".$newPost['commentText']."'
		WHERE postId=$postId");
		return redirect('/rr/'.$pageId);
	}
	public function delView($pageId,$postId)
	{
		if(Auth::user()->userId != DB::selectOne("SELECT author FROM posts WHERE postId = $postId")->author)
		{
			return redirect('/');
		}
		$post = DB::selectOne("SELECT * FROM posts WHERE postId = $postId AND pageId = $pageId;");
		return view('posts.delete',compact('pageId','postId','post'));
	}
	public function del($pageId,$postId)
	{
		DB::delete("DELETE FROM Posts Where postId = $postId AND pageId = $pageId;");
		return redirect('/rr/'.$pageId);
	}
	public function upvote($postId)
	{
		$post = Posts::where('postId','=',$postId)->first();
		$temp = $post->postKarma + 1;
		$user = DB::selectOne("SELECT * FROM users WHERE userId = $post->author;");
		
		DB::update("UPDATE posts SET postKarma= $temp WHERE postId = $postId;");
		$temp = $user->link_karma +1;
		DB::update("UPDATE users SET link_karma= $temp WHERE userId = $user->userId;");
		return redirect()->back();
	}
	public function downvote($postId)
	{
		
		$post = Posts::where('postId','=',$postId)->first();
		$temp = $post->postKarma - 1;
		$user = DB::selectOne("SELECT * FROM users WHERE userId = $post->author;");
		
		DB::update("UPDATE posts SET postKarma= $temp WHERE postId = $postId;");
		$temp = $user->link_karma -1;
		DB::update("UPDATE users SET link_karma= $temp WHERE userId = $user->userId;");
		return redirect()->back();
	}
}
