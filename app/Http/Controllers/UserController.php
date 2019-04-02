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
		$follows = DB::select("SELECT * FROM follow WHERE userId = $user->userid;");
		$pages = array();
		foreach($follows as $follow)
		{
			array_push($pages,Page::select('subreddit')->where('pageID','=',$follow->pageId)->first());
		}
		return view('profile',compact('user','pages'));
	}
}
