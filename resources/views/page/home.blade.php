@extends('welcome')
@section('content')
<div class="row">
<div class="col-sm">
<h1>{{$page->subreddit}}</h1>
<div class="panel-group">

{{$page->pageDescrip}}
</div>
</div>
@foreach($posts as $post)
<div class="col-sm">
     <div class="panel-group">
	  <div class="panel panel-default">
		<div class="panel-body">{{$post->commentText}}</div>
	  </div>
	</div>
</div>
@endforeach
</div>
@endsection