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
                                 <img src="{{Auth::user()->avatar}}" style="width:100px;height:100px;">
                            </div>
                        </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
