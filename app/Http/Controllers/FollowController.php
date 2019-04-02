<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\User;
use App\Follow;
use Illuminate\Support\Facades\DB;
use Auth;
use Carbon\Carbon;
class FollowController extends Controller
{
    public function follow($subreddit)
	{
		//return "Here";
		$page = Page::where('subreddit',$subreddit)->first();
		$userId = Auth::user()->userid;
		$now = Carbon::now()->toDateTimeString();
		DB::insert("INSERT INTO follow VALUES('$now',$userId, $page->pageID, '/rr/$page->subreddit');");
		return redirect("/rr/$page->subreddit");
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
	public function unfollow($subreddit)
	{
		$page = Page::where('subreddit',$subreddit)->first();
		$userId = Auth::user()->userid;
		$now = Carbon::now()->toDateTimeString();
		DB::delete("DELETE FROM follow WHERE userId = $userId AND pageId = $page->pageID;");
		return redirect("/rr/$page->subreddit");
	}
}
