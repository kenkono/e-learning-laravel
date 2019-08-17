@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{$lesson->title}}</h1>
                @foreach($questions as $question)
                <div class="card">
                    <div class="card-body">
                        <div class="text-left">
                            <div class="card">
                                <div class="card-body">
                                    <p>test</p>
                                </div>
                            <div>
                        <div class="text-left">
                            <h1>Question1</h1>
                            <p>{{$question->question}}</p>
                            <div class="radio">
                                <label><input type="radio" name="optradio1" checked>Option 1</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="optradio1">Option 2</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="optradio1">Option 3</label>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                @endforeach
                <div class="text-right">
                    <p><a href="/lessons/content/answer" class="btn btn-primary">Submit</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection