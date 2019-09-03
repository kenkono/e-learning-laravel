@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="new-lesson-error-sentence">
            @if ($errors->has('lesson_title'))
                <h4 class="">{{$errors->first('lesson_title')}}</h4>
            @endif
            @if ($errors->has('lesson_description'))
                <h4 class="">{{$errors->first('lesson_description')}}</h4>
            @endif
        </div>
        <form action="/lesson/content/{{ $lesson->id }}/store" method="POST" class="m-10">
            @csrf
            <div class="form-group">
                <label>Lesson Title</label>
                <input type="text" class="form-control" name="lesson_title" value="{{ $lesson->title }}">
            </div> 

            <div class="form-group">
                <label>Lesson Description</label>
                <input type="text" class="form-control" name="lesson_description" value="{{ $lesson->explanation }}">
            </div> 

            <div class="text-right">
                <a href="/lessons" class="create-post btn btn-warning mt-3 mr-3">Back</a>
                <button class="create-post btn btn-primary mt-3" type="submit">Submit</button>
            </div>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>
@endsection