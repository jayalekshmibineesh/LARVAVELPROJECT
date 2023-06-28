@extends('layout.index2')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">

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
    <th> Doctor_name</th>
    <th>Specialisation</th>
    <th>Email</th>
    <th>Contact</th>
     <th>Time</th>
    <th>Image</th>

    <th colspan="2"> Action</th>
    </tr>
    @foreach($view as $views)
    <tr>
        <td>{{ $views->doctor_name }} </td>
        <td>{{$views->specialisation}}</td>
        <td>{{ $views->email }}</td>
        <td> {{ $views->contact }}</td>
        <td>{{$views->time}}</td>
        <td><img src="{{asset('storage/images/'.$views->image)}}" alt="" width="55px" height="50px"></td>
        <td><a class="btn btn-primary" href="{{route('edit',$views->id)}}">edit</a> </td>
        <td><a  class="btn btn-danger"href="{{route('delete',$views->id)}}"> delete</a></td>
    </tr>
@endforeach

</table>
</center>
        </div>
    </div>
</div>

@endsection
