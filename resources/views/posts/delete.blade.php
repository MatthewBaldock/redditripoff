@extends('welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="/rr/{{$pageId}}/post/delete/{{$postId}}">
                        @csrf

                        <div class="form-group row">
                            <label for="postTitle" class="col-md-4 col-form-label text-md-right">{{ __('Delete') }}: {{$post->postTitle }}?</label>

                        </div>
						
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Delete Post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
