<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
		
	}
	public function createView($pageId)
	{
		return view('posts.create',compact('pageId'));
	}
	public function create($pageId)
	{
		$newPost = \Request::all();
		return view('posts.create');
	}
}
