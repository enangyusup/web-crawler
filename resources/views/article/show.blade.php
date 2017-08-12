@extends('layout')

@section('title', 'Read page')

@section('content')
@endsection
    <h1>{{ $article->title }}</h1>
    <div class="content_body">{!! $article->content !!}</div>
