@extends('layouts.layout')

@section('content')
    <section class="hero  is-large  is-bold is-primary"  style="background: no-repeat center center; background-size: cover;" >
        <div class="hero-body">
            <div class="container">

                <p class="subtitle is-3"></p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column is-12">

                    <div class="content">
                        <p> Name: {{$form->name}} </p>
                        <p>Age: {{ $form->age }}</p>

                        <p> Description:  {{$form->description}}
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection


