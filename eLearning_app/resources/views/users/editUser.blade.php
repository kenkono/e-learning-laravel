@extends('layouts.app')

@section('content')

<form action="/user/storeEdit/{{$user->id}}" method="POST" enctype="multipart/form-data" class="m-10">
@csrf
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12 editUser-avatar">
                    <p><img src="{{$user->avatar}}" style="width:200px;height:200px;"></p>
                </div>
                <div class="col-md-12 editUser-avatar" >
                    <p><input type="file" name="avatar" class="editUser-inputFile"></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mr-5 ml-5">
            
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$user->email}}">
                </div>   

        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="text-center">
        <button class="create-post btn btn-primary mt-3" type="submit">Edit</button>
    </div>
</form>
@endsection