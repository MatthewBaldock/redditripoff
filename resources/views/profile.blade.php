@extends('welcome')
@section('content')
<div class="row">
<div class="col-sm">
     <div class="well well-lg">
		<h1>{{$user->username}}</h1>
		<div class="container">
		{!! Form::model($user,['method'=>'GET','id'=>'userForm']) !!}
			<div class="row">
			<div class="row">
				
				<div class="col-sm-4"><h2>Info</h2>
					<label for="email" class="col-sm col-form-label text-md-right">{{ __('E-Mail Address:') }}</label>
					{{$user->email}}
				</div>
			<div class="col-sm-4">
			<h2>Pages Followed</h2>
			@foreach($pages as $page)
			<a href='/rr/{{$page->subreddit}}'>{{$page->subreddit}}</a>
			@endforeach
			</div>
			<div class="col-sm-4">
			<h2>Pages Created</h2>
			@foreach($pageCreate as $create)
			<a href='/rr/{{$create->subreddit}}'>{{$create->subreddit}}</a>
			@endforeach
			</div>
			</div>
			@if(Auth::check() && Auth::user()->username == $user->username)
			<div class="row">
			<h2> Preferences</h2>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Prefered Language') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_lang',['en'=>'english'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Over 18 Content') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_over18',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('NSFW Content') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_nsfw',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Clicking') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_clicking',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Link Thumbnail') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_link_thumb',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Media Preview') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_media_preview',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Link Spotlight') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_link_spotlight',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Linking Trending Sub') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_link_trending_sub',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Link Recent') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_link_recent',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Link Compress') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_link_compress',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Hide Upvoted') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_link_hide_upvoted',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Link Downvoted') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_link_downvoted',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Link Display') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_link_display',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Link Min Link Score') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_link_min_link_score',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Sort Comments') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_comments_sort',['new'=>'New','old'=>'Old','top'=>'Top'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Ignore Suggested Comments') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_comments_ignore_suggested',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Comments Min') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_comments_min',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Display Comments') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_comments_display',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Show Conversation Inbox') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_message_show_conv_inbox',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Message Collapse') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_message_collapse',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Mark Message Read') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_message_mark_read',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Message Notify') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_message_notify',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Label NSFW') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_content_label_nsfw',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			<div class="col-sm-4">
			  <label for="email" class="col-sm col-form-label text-md-right">{{ __('Include NSFW') }}</label>
			<div class="col-sm">
			
			{!! Form::select('pref_content_include_nsfw',['0'=>'no','1'=>'yes'],null,['disabled'=>'disabled']) !!} 
			</div>
			</div>
			</div>
			@endif
		</div>
		{!! Form::close() !!}
		
	 </div>
</div>
</div>
@endsection