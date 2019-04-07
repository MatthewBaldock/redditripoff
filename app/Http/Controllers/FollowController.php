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
    public function follow($pageID)
	{
		$page = DB::selectOne("SELECT username, dateTime, pageDescrip, subreddit FROM page WHERE pageID = $pageID");

		$userId = Auth::user()->userId;
		$now = Carbon::now()->toDateTimeString();
		DB::insert("INSERT INTO follow VALUES('$now',$userId, $pageID, '/rr/$pageID');");
		return redirect("/rr/$pageID");
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
	public function unfollow($pageID)
	{
		$page = DB::selectOne("SELECT username, dateTime, pageDescrip, subreddit FROM page WHERE pageID = $pageID");
		$userId = Auth::user()->userid;
		DB::delete("DELETE FROM follow WHERE userId = $userId AND pageId = $pageID;");
		return redirect("/rr/$pageID");
	}
}
