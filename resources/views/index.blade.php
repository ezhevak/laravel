@extends('layouts.app')

@section('content')

<div class="container">  
    <div class="jumbotron">
    <h1 class="display-4">{{ $page->title }}</h1>
    <p class="lead">{!! $page->body !!}</p>
    <hr class="my-4">
    <p>{{ $page->excerpt }}</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="{{ \LaravelLocalization::localizeURL('/') }}" role="button">@lang('messages.learn_more')</a>
    </p>
    </div>
</div>
@endsection