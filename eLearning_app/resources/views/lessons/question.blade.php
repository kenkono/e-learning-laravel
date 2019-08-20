@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{$lesson->title}}</h1>
                <form action="#" method="POST" class="m-10">
                
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
                        <p><a href="/lessons/content/answer" class="btn btn-primary">Submit</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection