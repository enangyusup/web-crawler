@extends('layout')

@section('title', 'Tag show page')

@section('content')
    <div class="title m-b-md">
       Tag
    </div>
    <aside class="aside">
        <ul class="list">
            @for($i=1; $i <= 20; $i++)
                @php $url = route('tag.section', ['slug' => 'jokowi', 'section' => 'section'.$i]) @endphp
                <li class="list-item">
                    <a class="link" href="{{ $url }}" data-section="section{{ $i }}">section {{ $i }}</a>
                </li>
            @endfor
        </ul>
    </aside>
    @for($i=1; $i <= 20; $i++)
        <section id="section{{ $i }}">
            <h2>section {{ $i }}</h2>
        </section>
    @endfor
@endsection

@section('custom')
    <style>
        section {
            height: 600px;
            width: 500px;
            border: 1px dotted gray;
            margin: 5px;
        }

        .aside {
            position: sticky;
            top: 10px;
            left: 10px;
            border: 1px dashed #ccc;
            width: 200px;
        }
        .list {
        }
        .list-item {
            text-align: left;
            margin: 0;
            padding: 0;
        }
    </style>
@endsection
@section('js')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        var animateScroll = function(selector) {
            $('html,body').stop().animate({
                scrollTop: $(selector).offset().top - 20
            }, 500);
        }

        $('.link').each(function(){
            $(this).click(function(e){
                var link = $(this);
                animateScroll('#'+link.data('section'));
                window.history.pushState({}, null, link.attr('href'));
                e.preventDefault();
            });
        });

        var section = '#{{ $section }}';
        animateScroll(section);
    </script>
@endsection
