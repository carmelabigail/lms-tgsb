@extends('layouts.adminmain')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h5 style="color: green"><b>Leave Application by {{ $leave->name }}</b></h5>
</div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
{{-- Leave Application Form--}}          
          <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9">
              <div class="m-0">
                  <div class="row mb-3">
                    <label for="inputname" class="col-sm-2 col-form-label"><b class="text-success">Name</b></label>
                    <div class="col-sm-10">
                        <input type="name" name="name" readonly class="form-control" id="position" value="{{ $leave->name }}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputPos" class="col-sm-2 col-form-label"><b class="text-success">Position</b></label>
                    <div class="col-sm-10">
                        <input type="position" name="position" readonly class="form-control" id="position" value="{{ $leave->position }}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputPos" class="col-sm-2 col-form-label"><b class="text-success">Type of Leave</b></label>
                    <div class="col-sm-10">
                        <input type="position" name="typeofleave" readonly class="form-control" id="typeofleave" value="{{ $leave->typeofleave }}">
                    </div>
                  </div>
                    
                    <div class="row mb-3">
                      <label for="inputname" class="col-sm-2 col-form-label"><b class="text-success">Date</b></label>
                      <div class="col-sm-10">
                          <div class="row align-items-start">
                            <div class="col">
                            <input type="start" readonly class="form-control @error('date_start') is-invalid @enderror" id="inputname" name="date_start" value="{{ $leave->date_start }}"> 
                            </div>
                            <div class="col">
                            <b><center>to</center></b>
                            </div>
                            <div class="col">
                            <input type="end" readonly class="form-control @error('date_end') is-invalid @enderror" id="inputname" name="date_end" value="{{ $leave->date_end }}"> 
                            </div>
                          </div>
                    </div></div>

                    <div class="row mb-3">
                      <label for="inputname" class="col-sm-2 col-form-label"><b class="text-success">Date Return to Work</b></label>
                      <div class="col-sm-10">
                        <input type="return" readonly class="form-control @error('datereturn') is-invalid @enderror" id="inputname" name="date_return" value="{{ $leave->date_return }}">
                      </div>
                    </div>
                  
                    <div class="row mb-3">
                      <label for="inputname" class="col-sm-2 col-form-label"><b class="text-success">Address/Phone During Leave</b></label>
                      <div class="col-sm-10">
                        <input type="phone_address" readonly class="form-control @error('phone_address') is-invalid @enderror" id="phone_address" name="phone_address" value="{{ $leave->phone_address }}">
                      </div>
                    </div>
                  
                    <div class="row mb-3">
                      <label for="inputname" class="col-sm-2 col-form-label"><b class="text-success">Reason</b></label>
                      <div class="col-sm-10">
                        <input type="reason" readonly class="form-control @error('reason') is-invalid @enderror" id="reason" name="reason" value="{{ $leave->reason }}">
                      </div>
                    </div>

                    {{-- <div class="row mb-3">
                        <label for="inputname" class="col-sm-2 col-form-label"><b class="text-success">Remarks</b></label>
                        <div class="col-sm-10">
                            <textarea class="form-control @error('reason') is-invalid @enderror" id="exampleFormControlTextarea1" name="remarks" rows="3"></textarea>
                        </div>
                      </div> --}}

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <form action="{{ url('approve-req/'.$leave->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                      <button type="submit" class="btn btn-success btn-block"><b>Approve</b></button></form>
                      <form action="{{ url('reject-req/'.$leave->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                      <button type="submit" class="btn btn-danger btn-block"><b>Reject</b></button></form>
                    </div>
                  </div>
          </div>
        </div>
@endsection