@extends('welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Post') }}</div>

                <div class="card-body">
                    <form method="POST" action="/rr/{{$pageId}}/post/create">
                        @csrf
							<div class="form-group row">
                            <label for="postTitle" class="col-md-4 col-form-label text-md-right">{{ __('Post Title') }}</label>

                            <div class="col-md-6">
                                <input id="postTitle" type="text" class="form-control{{ $errors->has('postTitle') ? ' is-invalid' : '' }}" name="postTitle" value="{{ old('postTitle') }}" required autofocus>

                                @if ($errors->has('postTitle'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('postTitle') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="commentText" class="col-md-4 col-form-label text-md-right">{{ __('Comment Text') }}</label>

                            <div class="col-md-6">
                                <input id="commentText" type="textArea" class="form-control{{ $errors->has('commentText') ? ' is-invalid' : '' }}" name="commentText" value="{{ old('commentText') }}" required autofocus>

                                @if ($errors->has('commentText'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('commentText') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('New Post') }}
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
