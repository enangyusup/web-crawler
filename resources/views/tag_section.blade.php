@extends('layout')

@section('title', 'Tag show page')

@section('content')
    <div class="title m-b-md">
       Tag
    </div>
    <section class="section1">
        <a href="{{ route('tag.section', ['slug' => 'jokowi', 'section' => 'section1']) }}">
            Jokowi section 1
        </a>
    </section>
    <section class="section2">
        <a href="{{ route('tag.section', ['slug' => 'jokowi', 'section' => 'section2']) }}">
            Jokowi section 2
        </a>
    </section>
    <section class="section3">
        <a href="{{ route('tag.section', ['slug' => 'jokowi', 'section' => 'section3']) }}">
            Jokowi section 3
        </a>
    </section>
    <section class="section4">
        <a href="{{ route('tag.section', ['slug' => 'jokowi', 'section' => 'section3']) }}">
            Jokowi section 4
        </a>
    </section>
@endsection

@section('custom')
    <style>
        section {
            height: 300px;
            width: 600px;
            border: 1px solid red;
            margin: 5px;
        }
    </style>
@endsection
