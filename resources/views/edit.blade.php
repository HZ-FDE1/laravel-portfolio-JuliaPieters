@extends('layout')
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>Update Article</h1>

            <form method="POST" action="/blog{{$article->id}}">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input" type="text" name="title" id="title" value="{{$article->title}}">
                    </div>
                </div>


                <div class="field">
                    <label class="label" for="body">Content</label>

                    <div class="control">
                        <textarea class="textarea" name="content" id="content">{{$article->content}}</textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>

                </div>

            </form>
            <form method="POST" action="/blog/{{ $article->id }}">
                @csrf
                @method('DELETE')

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Delete</button>
                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection

