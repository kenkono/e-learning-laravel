@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            @if(Auth::user()->is_admin)
            <div class="m-2">
                <a href="/lesson/content/new" class="btn btn-primary">Create New Lesson</a>
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
                                    <a href="/lesson/content/{{$lesson->id}}" class="btn btn-primary">Learn</a>
                                    <a href="/lesson/{{$lesson->id}}/questions" class="btn btn-secondary">Show Question</a>
                                    @if(Auth::user()->is_admin)
                                    <a href="/lesson/content/{{$lesson->id}}/edit" class="btn btn-success">Edit</a>
                                    <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$lesson->id}})" 
                                        data-target="#DeleteModal" class="btn btn-danger">Delete</a>
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

    <!-- delete Modal content-->
    <div id="DeleteModal" class="modal fade text-danger" role="dialog">
        <div class="modal-dialog ">
            <form action="" id="deleteForm" method="post">
                <div class="modal-content">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <p class="text-center">Are you sure want to delete ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

<!-- delete function -->
<script type="text/javascript">
     function deleteData(id)
     {
         var id = id;
         var url = '/lesson/content/:id/delete';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script>