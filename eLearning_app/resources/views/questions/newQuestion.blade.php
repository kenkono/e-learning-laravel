@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="new-lesson-error-sentence">
            @if ($errors->has('question'))
                <h4>{{$errors->first('question')}}</h4>
            @endif
            @if ($errors->has('explanation'))
                <h4>{{$errors->first('explanation')}}</h4>
            @endif
            @if ($errors->has('answer_id'))
                <h4>{{$errors->first('answer_id')}}</h4>
            @endif
            @if ($errors->has('choice'))
                <h4>{{$errors->first('choice')}}</h4>
            @endif
        </div>
        <form action="/lesson/{{ $lesson->id }}/questions/storeQuestion/" method="POST" class="m-10">
            @csrf
            <div class="form-group">
                <label>Question</label>
                <input type="text" class="form-control" name="question">
            </div>

            <div class="form-group">
                <label>Explanation</label>
                <input type="text" class="form-control" name="explanation">
            </div>


            <p>Please check the correct answer.</p>
            @foreach(range(1 , 3) as $value)
                <div class="form-group">
                <label>
                    <input type="radio" name="answer_id" value={{$value}}>
                    Choice{{$value}}
                </label>
                    <input type="text" class="form-control" name="choices[]">
                </div>
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