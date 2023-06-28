@extends('layout.index2')
@section('content') 
<div class="container" >
    <div class="row">
        <div class="col-4">
        </div>
        <center>
            <table class="table table-bordered table-danger table-striped" style="width: 80%;">
                <tr>
                    <th>Name</th>
                    <th>Patient Name</th>
                    <th>Doctor Name</th>
                    <th>Gender</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
                @foreach($users as $userss)
                <tr>
                    <td>{{ $userss->name }}</td>
                    <td>{{ $userss->patient_name }}</td>
                    <td>{{ $userss->doctor_name }}</td>
                    <td>{{ $userss->gender }}</td>
                    <td>{{ $userss->date }}</td>
                    <td>{{ $userss->time }}</td>
                </tr>
                @endforeach
            </table>
            </center>
    
    </div> 
</div>
@endsection
