@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h5 class="h1"><b>Leave Application Form</b></h5>
</div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
{{-- Leave Application Form--}}          
          <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9">
              <form action="{{ url('insert-data') }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('put') }}
              <div class="m-0">
                  <div class="row mb-3">
                    <label for="inputname" class="col-sm-2 col-form-label"><b class="text-success">Name</b></label>
                    <div class="col-sm-10">
                        <input type="name" name="name" readonly class="form-control" id="position" value="{{ auth()-> user()->name }}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputPos" class="col-sm-2 col-form-label"><b class="text-success">Position</b></label>
                    <div class="col-sm-10">
                        <input type="position" name="position" readonly class="form-control" id="position" value="{{ auth()-> user()->position }}">
                    </div>
                  </div>
                    
                    <fieldset class="row mb-3">
                      <legend class="col-form-label col-sm-2 pt-0"><b class="text-success">Type of Leave</b></legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="typeofleave" id="gridRadios1" value="Vacation Leave" checked>
                          <label class="form-check-label" for="gridRadios1">
                          Vacation Leave
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="typeofleave" id="gridRadios2" value="Emergency Leave">
                          <label class="form-check-label" for="gridRadios2">
                            Emergency Leave
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="typeofleave" id="gridRadios3" value="Half Day">
                          <label class="form-check-label" for="gridRadios3">
                            Half Day
                          </label>
                        </div>
                      </div>
                    </fieldset>
                    
                    <div class="row mb-3">
                      <label for="inputname" class="col-sm-2 col-form-label"><b class="text-success">Date</b></label>
                      <div class="col-sm-10">
                          <div class="row align-items-start">
                            <div class="col">
                            <input type="date" class="form-control @error('date_start') is-invalid @enderror" id="inputname" name="date_start"> 
                            </div>
                            <div class="col">
                            <b><center>to</center></b>
                            </div>
                            <div class="col">
                            <input type="date" class="form-control @error('date_end') is-invalid @enderror" id="inputname" name="date_end"> 
                            </div>
                          </div>
                    </div></div>

                    <div class="row mb-3">
                      <label for="inputname" class="col-sm-2 col-form-label"><b class="text-success">Date Return to Work</b></label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control @error('datereturn') is-invalid @enderror" id="inputname" name="date_return">
                      </div>
                    </div>
                  
                    <div class="row mb-3">
                      <label for="inputname" class="col-sm-2 col-form-label"><b class="text-success">Address/Phone During Leave</b></label>
                      <div class="col-sm-10">
                          <textarea class="form-control @error('phone_address') is-invalid @enderror" id="exampleFormControlTextarea1" name="phone_address" rows="3"></textarea>
                      </div>
                    </div>
                  
                    <div class="row mb-3">
                      <label for="inputname" class="col-sm-2 col-form-label"><b class="text-success">Reason</b></label>
                      <div class="col-sm-10">
                          <textarea class="form-control @error('reason') is-invalid @enderror" id="exampleFormControlTextarea1" name="reason" rows="3"></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputname" class="col-sm-2 col-form-label"><b class="text-success">Current Leave Status</b></label>
                      <div class="col-sm-10">
                        <input type="status" readonly class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="Pending">
                      </div>
                    </div>

                    <div class="d-grip text-end">
                      <button type="submit" class="btn btn-success btn-block"><b>Submit</b></button>
                    </div>
                  </div>
           </div>
        </div>
        </form>
@endsection