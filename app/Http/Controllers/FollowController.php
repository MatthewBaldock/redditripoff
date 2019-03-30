<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\User;
use App\Follow;
use Illuminate\Support\Facades\DB;
class FollowController extends Controller
{
    public function follow($subreddit)
	{
		$pageId = Page::where('subreddit',$subreddit)->get(1);
		$userId = Auth::user()->userId;
		DB::raw("INSERT INTO follower VALUES(userId, pageId, pageLink);");
		return view("subreddit");
	}
	public function followerList($pageId)
	{	
		$followList = DB::raw("SELECT userId FROM follower WHERE pageId = $pageId;");
		return view("list",compact('followList'));
	}
	public function userList()
	{	
		$followList = DB::raw("SELECT pageId FROM follower WHERE userId = $userId;");
		return view("list",compact('followList'));
	}
	public function unfollow()
	{
		return view("page.pageCreate");
	}
}
