@foreach($posts as $post)
<div class="col-sm-12">
     <div class="panel-group">
	  <div class="panel panel-default">
		<div class="panel-body">{{$post->commentText}}</div>
	  </div>
	</div>
</div>
@endforeach