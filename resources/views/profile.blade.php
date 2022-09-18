@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h1"><b>My Profile</b></h1>
</div>

{{-- Profile --}}
 
        {{-- Image --}}
        <div class="row d-flex justify-content-center align-items-center h-100">
            <center><img src="https://i.im.ge/2022/07/26/FUTBd6.png" class="rounded-circle" alt="Cinque Terre" style="width: 200px; height: 200px;"></center>
          <h1 class="text-center"><b class="text-success">{{ auth()-> user()->name }} ({{ auth()-> user()->gender }})</b></h1>

          
        {{-- Personal Information --}}
          <div class="col-md-9">
           
             <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
             <h6><b> Personal Information </b></h6></div>

              <div class= "container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center line">&nbsp;
                        </div> 
                    </div> 
                </div> 

              <div class="m-0">
                <form action="/examples/actions/confirmation.php" method="post">
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label font-weight-bolder text-success"><b>Name:</b> </label>
                    <div class="col-sm-10">
                        <input type="email" readonly class="form-control" id="position" value="{{ auth()-> user()->name }} ">
                    </div>
                </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label font-weight-bolder text-success"><b>Position:</b> </label>
                        <div class="col-sm-10">
                            <input type="email" readonly class="form-control" id="position" value="{{ auth()-> user()->position }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="gender" class="col-sm-2 col-form-label font-weight-bolder text-success"><b>D.O.B:</b></label>
                        <div class="col-sm-10">
                            <input type="gender" readonly class="form-control" id="dob" value="{{ auth()-> user()->dob }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="height" class="col-sm-2 col-form-label font-weight-bolder text-success"><b>Address:</b></label>
                        <div class="col-sm-10">
                            <input type="weight" readonly class="form-control" id="address" value="{{ auth()-> user()->address }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="weight" class="col-sm-2 col-form-label font-weight-bolder text-success"><b>Phone:</b></label>
                        <div class="col-sm-10">
                            <input type="weight" readonly class="form-control" id="phone" value="{{  auth()-> user()->phonenumber  }}">
                        </div>
                    </div>

                    {{-- Account Information --}}
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h6><b> Account Information </b></h6></div>

                    <div class="row mb-3">
                        <label for="dob" class="col-sm-2 col-form-label font-weight-bolder text-success"><b>Email:</b></label>
                        <div class="col-sm-10">
                            <input type="dob" readonly class="form-control" id="email" value="{{ auth()-> user()->email }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="pob" class="col-sm-2 col-form-label font-weight-bolder text-success"><b>Password:</b></label>
                        <div class="col-sm-10">
                            <input type="password" readonly class="form-control" id="password" value="xxxxxxxxxx">
                        </div>
                    </div>

                    <div class="d-grip text-end">
                    <a href= "/modify">
                    <button type="button" class="btn btn-success">Edit Profile</button></a>
                    </div>
                </div>
            </div>
@endsection