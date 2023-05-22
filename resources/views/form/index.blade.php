@extends('layouts.layout')
@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <hr>
                <body>
                <h1>FORM</h1>
                <div class="HOME PAGE">
                </div>

                </body>
                <hr>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="content">

                        <div class="has-text-right">
                            <a href="/forms/create" class="button is-primary">Add a new house...</a>
                        </div>

                        <div class="column is-12">
                            @foreach($forms as $form)
                                <div class="panel">
                                    <a class="panel-block" href="{{ route('forms.show', $form) }}">
                                        <article class="media">
                                            <figure class="media-left">
                                            </figure>
                                            <div class="media-content">
                                                <div class="content">
                                                    <p>
                                                        <strong>{{ $form->name }}</strong>
                                                        <small>{{ $form->age }}</small>
                                                        <br>
                                                        {{ $form->description }}
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
    </section>
@endsection
