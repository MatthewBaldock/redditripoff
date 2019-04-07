@extends('welcome')
@section('content')
<div class="row">

<div class="col-sm-8">
@if(Auth::check() && Auth::user()->username == $page[0]->username)
	<button class="btn btn-info" onClick="location='/page/edit/{{$pageID}}'">Edit</button>
 <button class="btn btn-danger" onClick="location='/page/delete/{{$pageID}}'">Delete</button>	
@endif
<h1>{{$page[0]->subreddit}}</h1>
<div class="panel-group">
{{$page[0]->pageDescrip}}</div>
<div class="panel-group">
Created:{{$page[0]->dateTime}} by 
<a href="/profile/{{$page[0]->username}}">{{$page[0]->username}}</a>

</div>

</div>

<div class="col-sm-4">
@if(Auth::check())
	@if(!$isFollowing)
<form method="POST" action="/follow/{{$page[0]->subreddit}}">
@csrf
<div class="form-group row mb-0">
<div class="col-md-6 offset-md-4">
<button type="submit" class="btn btn-primary">
{{ __('Follow') }}
</button>
 </div>
 </div>
</form>
	@else
		<form method="POST" action="/unfollow/{{$page[0]->subreddit}}">
@csrf
<div class="form-group row mb-0">
<div class="col-md-6 offset-md-4">
<button type="submit" class="btn btn-primary">
{{ __('Un-Follow') }}
</button>
 </div>
 </div>
</form>
@endif
@endif
</div>
<div  class="col-sm-8">
</div> 
<div  class="col-sm-4">
 <div class="panel-group">
	  <div class="panel panel-default">
	  <h2>Followers</h2>
@foreach($names as $name)
<div class="panel-body"><a href='/profile/{{$name->username}}'>{{$name->username}}</a></div>
@endforeach
	  </div>
	</div>
</div> 
@foreach($posts as $post)
<div class="col-sm-12">
     <div class="panel-group">
	  <div class="panel panel-default">
		<div class="panel-body">{{$post->commentText}}</div>
	  </div>
	</div>
</div>
@endforeach
</div>

@endsection