@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="welcome">Business E-learning site</h1>
    <div class="row">
        <div class="col-md-6 welcome-font">
            <i class="far fa-edit welcome-fa-big"></i>
        </div>
        <div class="col-md-6 welcome-sentence">
            <h3 class="welcome-sentece-1">Want to be a good business person?</h3>
            <h3 class="welcome-sentece-1">Push below button!</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-5 welcome-button">
            <a href="/register" class="btn btn-secondary welcome-register">Register</a>
            <a href="/login" class="btn btn-secondary welcome-login">Login</a>
        </div>
    </div>
</div>

@endsection