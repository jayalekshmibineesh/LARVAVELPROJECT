@extends('staff.index3')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {!!session('success')!!}
</div>
@endif
<section>
<div class="card" style="background-color:skyblue; with:500;border-radius: 15px;padding-top:800px;">
            <div class="card-body p-5">
              <h3 class="text-uppercase text-center mb-1">Register a patient</h3>
              <form action="{{ route('patient_reg') }}" method="POST">
                @csrf 
                  <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" name="patient_name"  placeholder="Enter Patient name"class="form-control form-control-lg mt-5 " />
                  <input type="email" id="form3Example3cg" name="email" placeholder="patient email"class="form-control form-control-lg mt-2" />
                  <select name="department" id="" required class="form-control mt-3">
                    <option>Select department</option>
                    @foreach($doct as $docts)
                    <option value="{{ $docts->specialisation }}">{{ $docts->specialisation}}</option>
                    @endforeach
                  </select>
                  <input type="date" name="date" placeholder="enter date"class="form=control form-control-lg mt-2">
                  <input type="time" name="time" placeholder="enter time"class="form=control form-control-lg mt-2">
                  <input type="hidden" name="staff_id" id="form3Example4cg"  value="{{Auth::user()->id}}"class="form-control form-control-lg mt-2" />
                  <input type="text" name="place" id="form3Example4cdg" placeholder="Enter patient place"class="form-control form-control-lg mt-2" />
                  <input type="text" name="contact" id="form3Example4cdg" placeholder="Enter contact"class="form-control form-control-lg mt-2" />
                  <select name="doctor_name" id=""required class="form-control mt-3">
                    <option>Select doctorname</option>
                    @foreach($doct as $docts)
                    <option value="{{ $docts->doctor_name }}">{{ $docts->doctor_name }}</option>
                    @endforeach
                  </select>
                  
                  <br>
                  <input type="radio" name="gender" value="Male">male
                  <input type="radio" name="gender" value="Female">female<br>
                  <input type="number" name="age" placeholder="enter age"class="form-control mt-2">
                                 
                
                    <input class="btn btn-primary mt-3" type="submit" value="Register Patient">
              

              </form>

            </div>
          </div>

    
</section>
@endsection
