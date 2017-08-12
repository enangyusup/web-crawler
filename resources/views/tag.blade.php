@extends('layout')

@section('title', 'Tag page')

@section('content')
    <div class="title m-b-md">
       Tag
    </div>
    <section>
        <a href="{{ route('tag.slug', ['slug' => 'jokowi']) }}">
            Jokowi
        </a>
    </section>
@endsection
