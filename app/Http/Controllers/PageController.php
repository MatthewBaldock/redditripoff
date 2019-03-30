<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Page;
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
		Page::insert( ['username' => Auth::user()->username, 'dateTime' => now(),
		'pageDescrip'=> $newpage['pageDescrip'],
		'subreddit'=> $newpage['subreddit']]);
		return redirect("/rr/".$newpage['subreddit']."");
	}
	
	public function editView()
	{
		return view("page.pageEdit");
	}
	public function edit()
	{
		return view("page.pageEdit");
	}
	
	public function delView()
	{
		return view("page.pageDel");
	}
	public function del()
	{
		return view("page.pageDel");
	}
}
