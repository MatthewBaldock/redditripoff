<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Follow;
use App\Page;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function profile($username)
	{
		$user = User::where('username','=',$username)->first();
		$follows = DB::select("SELECT * FROM follow WHERE userId = $user->userId;");
		$pages = array();
		foreach($follows as $follow)
		{
			array_push($pages,DB::selectOne(DB::raw("SELECT subreddit FROM page WHERE pageID = $follow->pageId;")));
		}
		$pageCreate = DB::select(DB::raw("SELECT subreddit FROM page WHERE username = '$username';"));

		return view('profile',compact('user','pages','pageCreate'));
	}
}
