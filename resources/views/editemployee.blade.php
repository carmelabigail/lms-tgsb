@extends('layouts.adminmain')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h2 style="color:green;"><b>Edit Employee Information</b></h2>
</div>

@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
{{-- Profile --}}
 
        {{-- Image --}}  
        {{-- Personal Information --}}
          <div class="col-md-9">
            <form action="{{ url('edit-employee/'.$users->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('put') }}
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
             <h6><b>Personal Information</b></h6></div>
              <div class= "container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center line">&nbsp;
                        </div> 
                    </div> 
                </div> 

              <div class="m-0">
                  <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label font-weight-bolder text-success"><b>Name:</b> </label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="name" value="{{ $users->name }}" name="name">
                    </div>
                </div>

                <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0"><b class="text-success">Gender</b></legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" @checked($users->gender == "F") type="radio" name="gender" id="gridRadios1">
                          <label class="form-check-label" for="gridRadios1">
                            Female
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" @checked($users->gender == "M") type="radio" name="gender" id="gridRadios2">
                          <label class="form-check-label" for="gridRadios2">
                            Male
                          </label>
                        </div>
                    </div>
                </fieldset>

                    <div class="row mb-3">
                        <label for="position" class="col-sm-2 col-form-label font-weight-bolder text-success"><b>Position:</b> </label>
                        <div class="col-sm-10">
                            <input type="position" class="form-control" id="position" value="{{ $users->position }}" name="position">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="position" class="col-sm-2 col-form-label font-weight-bolder text-success"><b>IC Number:</b> </label>
                        <div class="col-sm-10">
                            <input type="ic number" class="form-control" id="ic_no" value="{{ $users->ic_no }}" name="ic_no">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="height" class="col-sm-2 col-form-label font-weight-bolder text-success"><b>Address:</b></label>
                        <div class="col-sm-10">
                            <input type="address" class="form-control" name="address" id="address" value="{{ $users->address }}" name="address">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="weight" class="col-sm-2 col-form-label font-weight-bolder text-success"><b>Phone:</b></label>
                        <div class="col-sm-10">
                            <input type="phonenumber" class="form-control" name="phonenumber" id="phone" value="{{ $users->phonenumber }}" name="phonenumber">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="weight" class="col-sm-2 col-form-label font-weight-bolder text-success"><b>D.O.B:</b></label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="dob" id="dob" value="{{ $users->dob }}">
                        </div>
                    </div>

                    {{-- Account Information --}}
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                      <h6><b>Account Information</b></h6></div>

                    <div class="row mb-3">
                        <label for="dob" class="col-sm-2 col-form-label font-weight-bolder text-success"><b>Email: </b></label>
                        <div class="col-sm-10">
                            <input type="dob" class="form-control" id="email" name="email" value="{{ $users->email }}">
                        </div>
                    </div>

                    <div class="d-grip text-end">
                    <button type="submit" class="btn btn-success btn-block"><b>Update</b></button>
                    </div>
                    
                  </div>
              </div>
         </div>
@endsection 