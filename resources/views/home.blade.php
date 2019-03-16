@extends('welcome')
@section('content')
<div class="row">
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