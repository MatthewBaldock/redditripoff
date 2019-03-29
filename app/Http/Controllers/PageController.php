<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
		return view("page.pageCreate");
	}
	public function create()
	{
		return view("page.pageCreate");
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
