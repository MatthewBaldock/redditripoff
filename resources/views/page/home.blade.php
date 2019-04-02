@extends('welcome')
@section('content')
<div class="row">
<div class="col-sm-8">
<h1>{{$page->subreddit}}</h1>
<div class="panel-group">

{{$page->pageDescrip}}
</div>

</div>

<div class="col-sm-4">
@if(Auth::check())
	@if($isFollowing)
<form method="POST" action="/follow/{{$page->subreddit}}">
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
		<form method="POST" action="/unfollow/{{$page->subreddit}}">
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