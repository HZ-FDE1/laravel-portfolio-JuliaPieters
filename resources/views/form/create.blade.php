@extends('layouts.layout')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12"> {{-- These divs are needed for proper layout --}}
                    <form method="POST" action="{{route('forms.index')}}">
                        @csrf
                        <div class="container">
                            <hr>
                            <body>
                            <h1>Fill in this Form</h1>
                            <div class="HOME PAGE">
                            </div>

                            </body>
                            <hr>
                            <div class="form">
                        <div class="field">
                            <label class="label" for="name" style="font-size: x-large">Name</label>

                            <div class="control">
                                <input class="input" type="text" name="name" id="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <p class="error" style="color: darkred">{{ $errors->first('name') }}</p>
                                    <p style="color: darkred">Oops it looks like you did not fill in this field!</p>
                                @endif

                            </div>
                        </div>

                        <div class="field">
                            <label class="label" for="age" style="font-size: x-large">Age</label>

                            <div class="control">
                                <input class="textarea" name="age" id="age" value="{{ old('age') }}">

                                @if ($errors->has('age'))
                                    <p class="error" style="color: darkred">{{ $errors->first('age') }}</p>
                                    <p style="color: darkred"> Oops it looks like you did not fill in this field! </p>
                                @endif

                            </div>
                        </div>

                        <div class="field">
                            <label class="label" for="description" style="font-size: x-large">Description</label>

                            <div class="control">
                                <input class="description" name="description" id="description" value="{{ old('description') }}">

                                @if ($errors->has('description'))
                                    <p class="error" style="color: darkred">{{ $errors->first('description') }}</p>
                                    <p style="color: darkred"> Oops it looks like you did not fill in this field! </p>
                                @endif

                            </div>
                        </div>
                            </div>
                        <div>
                            <div>
                                <button id="blogbutton" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


