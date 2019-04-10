@foreach($posts as $post)
<div class="col-sm-12">
     <div class="panel-group">
	  <div class="panel panel-default">
		<div class="panel-header"><a href="{{$post->link}}">{{$post->postTitle}}</a></div>
		<div class="panel-body">{{$post->commentText}} </div>
		<div class="panel-footer">
		<form method="POST" action="/post/upvote/{{$post->postId}}">
		 @csrf
		<button type="submit">&uarr;</button> 
		<span class="badge">{{$post->postKarma}}</span> 
		<button type="submit" formaction="/post/downvote/{{$post->postId}}">&darr;</button> 
		</form>	
		{{$post->dateSubmitted}}
		@if(Auth::check())
@if(Auth::user()->userId == $post->author)
		<a href="/rr/{{$post->pageId}}/post/edit/{{$post->postId}}">edit</a>
	
		<a href="/rr/{{$post->pageId}}/post/delete/{{$post->postId}}">delete</a>
		@endif
		@endif
		</div>
	  </div>
	</div>
</div>
@endforeach