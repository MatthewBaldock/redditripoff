<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Page;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
		$posts = DB::select("SELECT * FROM posts ORDER BY dateSubmitted DESC;");
        return view('home',compact("posts"));
    }
	 public function page($pageID)
    {
		$page = DB::select("SELECT username, dateTime, pageDescrip, subreddit FROM page WHERE pageID = $pageID");
		$posts = DB::select("SELECT * FROM posts WHERE pageId=$pageID ORDER BY dateSubmitted DESC;");
		$followers = DB::select("SELECT userId FROM follow WHERE pageId = $pageID");
		$names = array();
		$isFollowing = false;
		foreach($followers as $follower)
		{
			
			array_push($names,DB::selectOne("SELECT username FROM Users WHERE userId = $follower->userId;")->username);
		
		}
		if(Auth::check())
		if(in_array(Auth::user()->username,$names))
		{
			$isFollowing = true;
		}
        return view('page.home',compact("page",'posts','names','isFollowing','pageID'));
    }
	 public function insert()
    {
		//Posts::insert( ['email' => 'john@example.com', 'votes' => 0]);
        return "DONE";
    }
	
	
}
