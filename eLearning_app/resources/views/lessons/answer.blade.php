@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{$lesson->title}}</h1>
                @foreach($lesson->questions as $question)
                <div class="card">
                    <div class="card-body">
                        <div class="text-left">
                            <h1>Question</h1>
                            <p>{{$question->question}}</p>
                            @foreach($question->choices as $choice)
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="choices[]" >
                                            {{$choice->choice}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <br>
                @endforeach
                <div class="text-right">
                    <button class="create-post btn btn-primary mt-3" type="submit">Edit</button>
                </div>
            </div>
        </div>
    </div>

@endsection