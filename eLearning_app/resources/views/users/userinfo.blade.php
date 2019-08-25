

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- user profile -->
        <div class="col-sm-4">
            <div class="card user-profile">
                <div class="card-body">
                    <div class="text-center">
                        <div class="avatar">
                            <div class="default">
                                 <img src="{{ $user->avatar }}" style="width:100px;height:100px;">
                            </div>
                        </div>

                        <div class="py-2">
                            <h2>{{ $user->name }}</h2>
                                @if(Auth::user()->is_following($user->id))
                                    <div class="ml-auto">
                                        <a href="/user/unfollow/{{$user->id}}" class="btn btn-danger"> Unfollow </a>
                                    </div>
                                @else
                                    <div class="ml-auto">
                                        <a href="/user/follow/{{$user->id}}" class="btn btn-primary"> Follow</a>
                                    </div>
                                @endif
                        </div>
                        

                        <div class="row mt-15">
                            <div class="col-sm-6">
                                <strong><a href="#">{{ $user->following()->count() }}</a></strong>
                                <div>following</div>
                            </div>
                                <div class="col-sm-6">
                                    <strong><a href="#">{{ $user->followers()->count() }}</a></strong>
                                <div>followers</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- contents -->
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h1 class="home-h1">Learning contents</h1>
                        
                        @foreach($lessons as $lesson)
                        <div class="card home-lessons">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="home-details">{{$lesson->title}}</div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="home-details btn-warning">
                                                {{$user->course_status($lesson->id)}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection

