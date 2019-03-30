<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
		//$this->middleware('auth');
	}
	public function create($pageId)
	{
		return view('posts.create',compact('pageId'));
	}
	public function insert($pageId)
	{
		return view('posts.create');
	}
}
