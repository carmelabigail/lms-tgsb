@extends('layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2"><b>My Profile</b></h1>
</div>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h6><b> Change Password</b></h6></div>

              <div class="panel-body">
                  @if (session('error'))
                      <div class="alert alert-danger">
                          {{ session('error') }}
                      </div>
                  @endif
                  @if (session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div>
                  @endif
                  @if($errors)
                      @foreach ($errors->all() as $error)
                          <div class="alert alert-danger">{{ $error }}</div>
                      @endforeach
                  @endif
                  <form class="form-horizontal" method="POST" action="{{ route('changePasswordPost') }}">
                      {{ csrf_field() }}

                      <div class="form-group {{ $errors->has('current-password') ? ' has-error' : '' }} row mb-3">
                          <label for="new-password" class="col-sm-2 col-form-label font-weight-bolder text-success"><b>Current Password</b></label>

                          <div class="col-sm-10 mt-2">
                              <input id="current-password" type="password" class="form-control" name="current-password" required>

                              @if ($errors->has('current-password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('current-password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }} row mb-3">
                          <label for="new-password" class="col-sm-2 col-form-label font-weight-bolder text-success"><b>New Password</b></label>

                          <div class="col-sm-10 mt-2">
                              <input id="new-password" type="password" class="form-control" name="new-password" required>

                              @if ($errors->has('new-password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('new-password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row mb-3">
                          <label for="new-password-confirm" class="col-sm-2 col-form-label font-weight-bolder text-success"><b>Confirm New Password</b></label>

                          <div class="col-sm-10 mt-2">
                              <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="d-grip text-end mt-4">
                              <button type="submit" class="btn btn-success">
                                  Change Password
                              </button>
                          </div>
                      </div>
                  </form>
</div>
@endsection