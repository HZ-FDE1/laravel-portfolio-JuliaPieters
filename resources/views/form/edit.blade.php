@extends('layouts.layout')
@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12"> {{-- These divs are needed for proper layout --}}
                    <form method="POST" action="{{route('forms.show', $form)}}">
                        @csrf
                        @method('PUT')
                        <div class="field">
                            <label class="label" for="name">name</label>

                            <div class="control">
                                <input class="input" type="text" name="name" id="name" value="{{$form->name}}">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label" for="age">age</label>

                            <div class="control">
                                <label for="color"></label><textarea class="textarea" name="age" id="age">{{$form->age}}</textarea>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label" for="description">description</label>

                            <div class="control">
                                <label for="points"></label><textarea class="textarea" name="description" id="description">{{$form->description}}</textarea>
                            </div>
                        </div>


                        <div>
                            <div>
                                <button id="formbutton" type="submit">Edit</button>
                            </div>
                        </div>
                    </form>

                    <form method="POST" action="{{ route('forms.destroy', $form) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


