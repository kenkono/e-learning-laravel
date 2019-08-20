@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{$lesson->title}}</h1>
                <form action="/lessons/content/answer/{{$lesson->id}}" method="POST" class="m-10">
                @csrf
                    @foreach($lesson->questions as $question)
                        @isset($question->correct)
                        <div class="card">
                            <div class="card-body">
                                <div class="text-left">
                                    <p>The Correct Answer is : {{$question->correct}}</p>
                                </div>
                            </div>
                        </div>
                        @endif

                    <div class="card">
                        <div class="card-body">
                            <div class="text-left">
                                <h1>Question</h1>
                                <p>{{$question->question}}</p>

                                @isset($question->correct)
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-left">
                                            <p>{{$question->explanations->explanation}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @foreach($question->choices as $choice)
                                    <div 
                                        class="radio {{ $question->user_answer == $choice->id ? $question->answer_color : '' }}">
                                        <label>
                                            <input 
                                                type="radio" 
                                                name="question[{{$question->id}}]" 
                                                value="{{$choice->id}}"
                                                {{ $question->user_answer == $choice->id ? "checked" : ""}}
                                            >
                                                {{$choice->choice}}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <br>
                    @endforeach

                    @if(!isset($question->correct))
                    <div class="text-right">
                        <button class="create-post btn btn-primary mt-3" type="submit">Submit</button>
                    </div>
                    @endif

                </form>
            </div>
        </div>
    </div>

@endsection