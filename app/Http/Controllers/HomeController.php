<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Page;
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
		$posts = Posts::all();
        return view('home',compact("posts"));
    }
	 public function page($subreddit)
    {
		$page = Page::where("subreddit","=",$subreddit)->first();
		$posts = Posts::where('questionId','=',$page['pageID'])->get();
        return view('page.home',compact("page",'posts'));
    }
	 public function insert()
    {
		//Posts::insert( ['email' => 'john@example.com', 'votes' => 0]);
        return "DONE";
    }
	
	
}
