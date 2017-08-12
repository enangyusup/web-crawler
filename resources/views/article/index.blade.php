@extends('layout')

@section('title', 'Article page')

@section('content')
    <div class="title m-b-md">
        Article List
    </div>
    <ul>
        @foreach($articles as $article)
            <li><a href="{{ route('article.show', ['id' => $article->id]) }}">{{ $article->title }}</li>
        @endforeach
    </ul>
@endsection
