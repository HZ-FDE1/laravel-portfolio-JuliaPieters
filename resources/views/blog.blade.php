@extends('layout')

@section('content')



    <hr>
    <body>

    <h1>BLOG</h1>
    <hr>
    @forelse($articles as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ Str::limit($post->content, 200) }}</p>
    @empty
        <p style="centered">Geen posts gevonden...</p>
    @endforelse


{{--    <div class="eerstefeedback">--}}
{{--        <h2>Eerste feedback</h2>--}}
{{--        <a href="eerstefeedback.html">meer lezen..</a>--}}
{{--    </div>--}}

{{--    <div class="programmeerervaring">--}}
{{--        <h2> Mijn programmeer ervaring</h2>--}}
{{--        <a href="programmeerervaring.html">meer lezen..</a>--}}
{{--    </div>--}}

{{--    <div class="studiekeuze">--}}
{{--        <h2> Mijn studiekeuze</h2>--}}
{{--        <a href="studiekeuze.html">meer lezen..</a>--}}
{{--    </div>--}}

{{--    <div class="Artikel">--}}
{{--        <h2> Gevonden bedrijf</h2>--}}
{{--        <a href="article.html">meer lezen..</a>--}}
{{--    </div>--}}

{{--    <div class="eigenschappen">--}}
{{--        <h2> Mijn Swot analyse</h2>--}}
{{--        <a href="swot.html">meer lezen..</a>--}}
{{--    </div>--}}



{{--    <img class="foto-blog" src="https://i.pinimg.com/originals/53/8b/38/538b38ca00778376925c51ac60437fcf.gif" alt="">--}}

    </body>

@endsection
