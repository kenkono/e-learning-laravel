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

                        <div class="py-2">
                            <h2>{{ Auth::user()->name }}</h2>
                        </div>
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
                    </div>
                </div>
            </div>
        </div>

        <!-- contents -->
        <div class="col-md-8">
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
                                                {{Auth::user()->course_status($lesson->id)}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="d-flex justify-content-center">
                            {{ $lessons->links() }}
                        </div>

                        <p><a href="/lessons" class="btn btn-primary home-selectContents">Select Contents</a></p>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection
