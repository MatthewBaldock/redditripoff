@extends('welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Page') }}</div>

                <div class="card-body">
                    <form method="POST" action="/page/edit/{{$pageID}}">
                        @csrf

                        <div class="form-group row">
                            <label for="subreddit" class="col-md-4 col-form-label text-md-right">{{ __('Subreddit') }}</label>

                            <div class="col-md-6">
                                <input id="subreddit" type="text" class="form-control{{ $errors->has('subreddit') ? ' is-invalid' : '' }}" name="subreddit" value="{{ $page->subreddit }}" required autofocus>

                                @if ($errors->has('subreddit'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('subreddit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="pageDescrip" class="col-md-4 col-form-label text-md-right">{{ __('Page Description') }}</label>

                            <div class="col-md-6">
                                <input id="pageDescrip" type="text" class="form-control{{ $errors->has('pageDescrip') ? ' is-invalid' : '' }}" name="pageDescrip" value="{{ $page->pageDescrip }}" required autofocus>

                                @if ($errors->has('pageDescrip'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pageDescrip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit Page') }}
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
