@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            @foreach($lessons as $lesson)
                <div class="card">
                    <div class="card-body">
                        <div class="text-left">
                            <h1>{{$lesson->title}}</h1>
                            <p>{{$lesson->explanation}}</p>
                            <div class="text-right">
                                <p><a href="/lessons/content" class="btn btn-primary">Learn</a></p>
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