@extends('layout')

@section('title', 'Read page')

@section('content')
    <h1>{{ $article->title }}</h1>
    <div class="content_body">{!! $article->content !!}</div>
@endsection
