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
              <h3 class="text-uppercase text-center mb-5">Create a Staff account</h3>

              <form action="{{route('staff_reg')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg"name="name"  placeholder="EnterStaffname"class="form-control form-control-lg mt-2 " />
                  <input type="email" id="form3Example3cg"name="email" placeholder="Staff email"class="form-control form-control-lg mt-2" />
                  <input type="password"name="password" id="form3Example4cg"placeholder="Enter Staff password" class="form-control form-control-lg mt-2" />
                  <input type="text" name="username" id="form3Example4cdg" placeholder="Enter staff username"class="form-control form-control-lg mt-2" />
                  <input type="text" name="type" id="form3Example4cdg" placeholder="Enter type"class="form-control form-control-lg mt-2" />
                  <input type="file" name="image" id="form3Example4cdg"placeholder="Enter username" class="form-control form-control-lg mt-2" />
                  <br>
                                 
                <div class="d-flex justify-content-center">
                    <input class="btn btn-primary"type="submit" value="Register" name="submit">
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