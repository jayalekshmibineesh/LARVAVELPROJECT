@extends('layout.index2')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-1">

        </div>
        <div class="col-4 mt-5">
            @if(session('success'))
            <div class="alert alert-success">
            {!! session ('success')!!}    
            </div>
            @endif
            <center>

        <table class="table table-bordered table-danger table-striped" style="width:80%;">
    <tr>
    <th> Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Username</th>
    <th>Type</th>
    <th>Image</th>
    <th colspan="2"> Action</th>
    </tr>
    @foreach($view as $views)
    <tr>
        <td>{{ $views->name }} </td>
        <td>{{$views->email}}</td>
        <td>{{$views->password}}</td>

        <td> {{ $views->username }}</td>
        <td>{{$views->type}}</td>
        <td><img src="{{asset('storage/images/'.$views->image)}}" alt="" width="55px" height="50px"></td>
        <td><a class="btn btn-primary" href="{{route('staff_edit',$views->id)}}">edit</a> </td>
        <td><a  class="btn btn-danger"href="{{route('deletestaff',$views->id)}}"> delete</a></td>
    </tr>
@endforeach

</table>
</center>
        </div>
    </div>
</div>

@endsection
