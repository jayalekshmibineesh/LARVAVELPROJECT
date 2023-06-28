@extends('staff.index4')
@section('content')
<div style="background-color:white; width:40%;height:90%;">
  <div class="patient-details"style="background-color:skyblue; ">
    <h3>Prescription Sheet</h3>
    <div class="header">
      <div class="top-left" style="float: left; text-align:left;">
      Patient Name:<strong>{{ $pat->patient_name }}</strong><br> 
      Age:<strong>{{ $pat->age }}</strong><br> 
      Doctor:<strong>{{ $pat->doctor_name }}</strong> 
      </div>
      <div class="top-right" style="float: right;">
        Date:<strong>{{ $pat->date }}</strong> <br>
        Time:<strong>{{ $pat->time }}</strong><br>
      </div>
      
    </div>
  </div><br><br><br>
  <hr style="border: 2px solid black;">


  <div class="prescription "style="background-color:white;height:400px;">

  
 </div>
</div>
@endsection


