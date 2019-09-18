@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{$lesson->title}}</h1>
                <div class="new-lesson-error-sentence">
                    @if ($errors->has('question'))
                    <h4 class="new-lesson-error-sentence">{{$errors->first('question')}}</h4>
                    @endif
                </div>
                <form action="/lesson/content/answer/{{$lesson->id}}" method="POST" class="m-10">
                @csrf
                    @foreach($lesson->questions as $index => $question)
                        @isset($question->correct)
                                <div class="text-left">
                                    <p class="question-correct-answer">#{{$index + 1}} The Correct Answer is : <u><strong>{{$question->correct}}</strong></u></p>
                                </div>
                        @endif

                    <div class="card">
                        <div class="card-body">
                            <div class="text-left">
                                <h1>Question #{{$index + 1}}</h1>
                                <p class="question-show">{{$question->question}}</p>

                                @isset($question->correct)
                                <div class="explanation-block">
                                    <h3>Explanation</h3>
                                    <p class="question-correct-answer">{{$question->explanations->explanation}}</p>
                                </div>
                                @endif

                                @foreach($question->choices as $index => $choice)
                                    <div 
                                        class="radio {{ $question->user_answer == $choice->id ? $question->answer_color : '' }}">
                                        <label>
                                            <input 
                                                type="radio"
                                                name="question[{{$question->id}}]" 
                                                value="{{$choice->id}}"
                                                @isset($question->correct)
                                                    {{ $question->user_answer == $choice->id ? "checked" : "disabled"}}
                                                @endif
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
                @isset($question->correct)
                <div class="text-right">
                    <a href="/home">
                        <button class="create-post btn btn-warning mt-3 mr-3" type="submit">HOME</button>
                    </a>
                    <a href="/lesson">
                        <button class="create-post btn btn-primary mt-3">Back Contents</button>
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>

@endsection