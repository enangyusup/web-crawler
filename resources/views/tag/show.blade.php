@extends('layout')

@section('title', 'Tag show page')

@section('content')
    <div class="title m-b-md">
       Tag
    </div>
    <section>
        <a href="{{ route('tag.section', ['slug' => 'jokowi', 'section' => 'section1']) }}">
            Jokowi section 1
        </a>
    </section>
@endsection
