@extends('layout')
@section('content')
{{--    <link rel="stylesheet" href="../CSS/style.css">--}}
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>

            <form method="POST" action="/blog">
                @csrf
                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input" type="text" name="title" id="title">
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="content">Content</label>

                    <div class="control">
                        <textarea class="textarea" name="content" id="content"></textarea>
                        <p class="help is-danger">{{$errors->first('content')}}</p>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>

                </div>

            </form>
        </div>
    </div>
@endsection
