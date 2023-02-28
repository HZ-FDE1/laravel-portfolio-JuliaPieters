@extends('layout')
@section('content')

<hr>

<body>

<h1>FAQ</h1>

<hr>

    @foreach($faqs as $faq)
        <h2>{{ $faq->question }}</h2>
        <h4>{{ $faq->answer }}</h4>
        <a href="{{ $faq->link }}">{{ $faq->link }}</a>

    @endforeach

    <img class="foto-faq"
         src="https://st2.depositphotos.com/2495409/7863/i/450/depositphotos_78637522-stockafbeelding-vraagteken.jpg" alt="fotofaq">

</body>

@endsection
