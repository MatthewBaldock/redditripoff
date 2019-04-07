<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Page;
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{
    public function show($subreddit)
	{
		return view("subreddit");
	}
	public function list()
	{
		return view("list");
	}
	public function createView()
	{
		return view("page.create");
	}
	public function create()
	{
		$newpage = \Request::all();
		DB::insert(DB::raw("INSERT INTO Page VALUES(".Auth::user()->username."
		,".now().",".$newpage['pageDescrip'].",".$newpage['subreddit'].");"));
		return redirect("/rr/".$newpage['subreddit']."");
	}
	
	public function editView($pageID)
	{
		if(Auth::user()->username != DB::selectOne(DB::raw("SELECT username FROM page WHERE pageID = $pageID"))->username)
		{
			return redirect('/');
		}
		$page = DB::selectOne(DB::raw("SELECT username, dateTime, pageDescrip, subreddit FROM page WHERE pageID = $pageID"));

		return view("page.edit",compact('page','pageID'));
	}
	public function edit($pageID)
	{
		if(Auth::user()->username != DB::selectOne(DB::raw("SELECT username FROM page WHERE pageID = $pageID"))->username)
		{
			return redirect('/');
		}
		$values = \Request::all();
		DB::update(DB::raw("UPDATE page SET pageDescrip ='" .$values['pageDescrip']."' WHERE pageID = $pageID;"));

		DB::update(DB::raw("UPDATE page SET subreddit = '".$values['subreddit']."' WHERE pageID = $pageID;"));
		return redirect('/rr/'.$pageID);
	}
	
	public function delView($pageID)
	{
		if(Auth::user()->username != DB::selectOne(DB::raw("SELECT username FROM page WHERE pageID = $pageID"))->username)
		{
			return redirect('/');
		}
		$page = DB::selectOne(DB::raw("SELECT username, dateTime, pageDescrip, subreddit FROM page WHERE pageID = $pageID"));

		return view("page.delete",compact('page','pageID'));
	}
	public function del($pageID)
	{
		if(Auth::user()->username != DB::selectOne(DB::raw("SELECT username FROM page WHERE pageID = $pageID"))->username)
		{
			return redirect('/');
		}
		DB::delete(DB::raw("DELETE FROM page WHERE pageID = $pageID;"));
		return redirect('/');
	}
}
