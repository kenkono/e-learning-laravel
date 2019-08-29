@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            @if(Auth::user()->is_admin)
            <div class="m-2">
                <a href="/lessons/content/new" class="btn btn-primary">Create New Lesson</a>
            </div>
            @endif
            @foreach($lessons as $lesson)
                <div class="card">
                    <div class="card-body">
                        <div class="text-left">
                            <h1>{{$lesson->title}}</h1>
                            <p class="lesson-index-explanation">{{$lesson->explanation}}</p>
                            <div class="text-right">
                                <p>
                                    <a href="/lessons/content/{{$lesson->id}}" class="btn btn-primary">Learn</a>
                                    <a href="/lesson/{{$lesson->id}}/questions" class="btn btn-secondary">Show Question</a>
                                    @if(Auth::user()->is_admin)
                                    <a href="/lessons/content/{{$lesson->id}}/edit" class="btn btn-success">Edit</a>
                                    <a href="/lessons/content/{{$lesson->id}}/delete" class="btn btn-danger">Delete</a>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
            </div>
        </div>
    </div>

@endsection