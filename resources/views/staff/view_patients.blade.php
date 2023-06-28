@extends('staff.index3')
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
    <th> PatientName</th>
    <th>Department</th>
    <th>Doctor Name</th>
    <th>Email</th>
    <th> Date</th>
    <th> Time</th>
    <th>Place</th>
    <th>Contact</th>
    <th>Gender</th>
    <th>Age</th>
    <th>Action</th>
    </tr>
    @foreach($pat as $pats)
    <tr>
        <td>{{ $pats->patient_name }} </td>
        <td> {{ $pats->department }}</td>
        <td>{{ $pats->doctor_name }}</td>
        <td>{{ $pats->email }}</td>
        <td>{{$pats->date}}</td>
        <td>{{$pats->time}}</td>
        <td> {{ $pats->place }}</td>
        <td>{{ $pats->contact}}</td>
        <td> {{ $pats->gender }}</td>
        <td>{{ $pats->age }}</td>
       <td><a  class="btn btn-danger"href="{{route('printsheet',$pats->patient_id)}}">Prescription Sheet</a></td>
    </tr>
@endforeach

</table>
</center>
        </div>
    </div>
</div>

@endsection
