@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="changePassword-error">
        @if ($errors->has('password'))
          <h4 class="changePassword-error-message">{{$errors->first()}}</h4>
        @endif
        </div>
        <form action="/user/store/password/{{$user->id}}" method="POST" class="m-10">
            @csrf
            <div class="form-group">
                <label>Current Password</label>
                <input type="password" class="form-control" name="current_password">
            </div> 

            <div class="form-group">
                <label>New Password</label>
                <input type="password" class="form-control" name="password">
            </div> 
            
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation">
            </div> 
            <div class="text-right">
                <a href="/home" class="btn btn-warning mt-3 mr-3">Back</a>
                <button class="create-post btn btn-primary mt-3" type="submit">Edit</button>
            </div>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>
@endsection