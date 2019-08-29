@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="/lesson/{{ $question->id }}/questions/storeEdit/" method="POST" class="m-10">
            @csrf
            <div class="form-group">
                <label>Question</label>
                <input type="text" class="form-control" name="question" value="{{ $question->question }}">
            </div>

            <div class="form-group">
                <label>Explanation</label>
                <input type="text" class="form-control" name="explanation" value="{{$question->explanations->explanation}}">
            </div>


            <p>Please check the correct answer.</p>
            @foreach($question->choices as $key => $choice)
                <div class="form-group">
                    <input type="radio" 
                           name="answer_id" 
                           value={{$choice->id}}
                           {{$question->answer_id == $choice->id ? "checked" : "" }}>
                    <label>Choice{{$key + 1}}</label>
                    <input type="text" class="form-control" name="choices[{{$choice->id}}]" value="{{$choice->choice}}">
                </div>
            </input>
            @endforeach

            <div class="text-right">
                <a href="/lessons" class="create-post btn btn-warning mt-3 mr-3">Back</a>
                <button class="create-post btn btn-primary mt-3" type="submit">Edit</button>
            </div>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>
@endsection