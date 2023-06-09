@extends('layout.index2')
@section('content')
@if(session('success'))
<div class="alert alert-success">
  {!!session('success')!!}
</div>
@endif
<section class="">  
  <!-- <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6"> -->
          <div class="card" style="background-color:skyblue; with:500border-radius: 15px; margin-top:20%;">
            <div class="card-body p-5">
              <h3 class="text-uppercase text-center mb-5">Register Doctors</h3>

              <form action="{{route('doctor_reg')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg"name="doctor_name"  placeholder="Enter Doctor name"class="form-control form-control-lg" />
                  <input type="email" id="form3Example3cg"name="email" placeholder=" Enter Doctor email"class="form-control form-control-lg mt-2" />
                  <input type="text"name="contact" id="form3Example4cg"placeholder="Enter contact number" class="form-control form-control-lg mt-2" />
                  <input type="text" name="specialisation" id="form3Example4cdg" placeholder="Enter doctor specialisation"class="form-control form-control-lg mt-2" />
                  <input type="text" name="time" id="form3Example4cdg" placeholder="Enter time"class="form-control form-control-lg mt-2" />
                  <input type="file" name="image" id="form3Example4cdg"placeholder="Enter doctor image" class="form-control form-control-lg mt-2" /><br>
                  
                                 
                <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary"name="submit" value="register">Register</button>
                                  </div>
              </form>

            </div>
          </div>
        <!-- </div>
      </div>
    </div>
  </div> -->
</section>

@endsection