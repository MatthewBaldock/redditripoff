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
		DB::insert("INSERT INTO page (username,dateTime,pageDescrip,subreddit) VALUES('".Auth::user()->username."'
		,'".now()."','".$newpage['pageDescrip']."','".$newpage['subreddit']."');");
		$newPage = Page::where('subreddit','=',$newpage['subreddit'])->first();
		return redirect("/rr/".$newPage['pageID']."");
	}
	
	public function editView($pageID)
	{
		if(Auth::user()->username != DB::selectOne("SELECT username FROM page WHERE pageID = $pageID")->username)
		{
			return redirect('/');
		}
		$page = DB::selectOne("SELECT username, dateTime, pageDescrip, subreddit FROM page WHERE pageID = $pageID");

		return view("page.edit",compact('page','pageID'));
	}
	public function edit($pageID)
	{
		if(Auth::user()->username != DB::selectOne("SELECT username FROM page WHERE pageID = $pageID")->username)
		{
			return redirect('/');
		}
		$values = \Request::all();
		DB::update("UPDATE page SET pageDescrip ='" .$values['pageDescrip']."' WHERE pageID = $pageID;");

		DB::update("UPDATE page SET subreddit = '".$values['subreddit']."' WHERE pageID = $pageID;");
		return redirect('/rr/'.$pageID);
	}
	
	public function delView($pageID)
	{
		if(Auth::user()->username != DB::selectOne("SELECT username FROM page WHERE pageID = $pageID")->username)
		{
			return redirect('/');
		}
		$page = DB::selectOne("SELECT username, dateTime, pageDescrip, subreddit FROM page WHERE pageID = $pageID");

		return view("page.delete",compact('page','pageID'));
	}
	public function del($pageID)
	{
		if(Auth::user()->username != DB::selectOne("SELECT username FROM page WHERE pageID = $pageID")->username)
		{
			return redirect('/');
		}
		DB::delete("DELETE FROM page WHERE pageID = $pageID;");
		return redirect('/');
	}
}
