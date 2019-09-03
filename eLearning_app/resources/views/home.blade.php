@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- user profile -->
        <div class="col-md-4">
            <div class="card user-profile">
                <div class="card-body">
                    <div class="text-center">
                        <div class="avatar">
                            <div class="default">
                                 <img src="{{Auth::user()->avatar}}" style="width:100px;height:100px;">
                            </div>
                        </div>

                        @if($user == Auth::user())
                        <div class="py-2">
                            <h2>{{ Auth::user()->name }}</h2>
                        </div>
                        
                        @if(Auth::user()->is_admin)
                        <div class="py-2 home-admin-show">
                            <h3>Admin</h3>
                        </div>
                        @endif
                        
                        <div class="py-2">
                            <p><a href="/user/edit/{{ Auth::user()->id }}" class="btn btn-primary">Edit Profile</a></p>
                        </div>
                        <div class="py-2">
                            <p><a href="/user/edit/password/{{ Auth::user()->id }}" class="btn btn-primary">Change Password</a></p>
                        </div>

                        <div class="row mt-15">
                            <div class="col-sm-6">
                                <strong><a href="/user/followinglist">{{ Auth::user()->following()->count() }}</a></strong>
                                <div>following</div>
                            </div>
                                <div class="col-sm-6">
                                    <strong><a href="/user/followerslist">{{ Auth::user()->followers()->count() }}</a></strong>
                                <div>followers</div>
                            </div>
                        </div>
                        @else
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
                                <strong><a href="/user/followinglist/{{ $user->id }}">{{ $user->following()->count() }}</a></strong>
                                <div>following</div>
                            </div>
                                <div class="col-sm-6">
                                    <strong><a href="/user/followerslist/{{ $user->id }}">{{ $user->followers()->count() }}</a></strong>
                                <div>followers</div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- contents -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="lesson-user">
                        @if($user == Auth::user())
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
                                                    {{Auth::user()->course_status($lesson->id)}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
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
                        @endif
                        </div>
                        <div class="d-flex justify-content-center">
                            {{ $lessons->links() }}
                        </div>

                        @if($user == Auth::user())
                        <a href="/lessons" class="btn btn-primary home-selectContents">
                            Select Contents
                        </a>
                        @endif
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection
