@extends('layouts.mainly')

@section('container')
<link href="/css/login.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form mt-7">
            <form action="{{ route('password.update') }}" method="POST">
                {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $request->route('token') }}">
              {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
              
               <div class="row">
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif
                        <div class="form-group mt-5">
                            <h2>Reset Password</h2>
                        <label for="email">{{ __('Email') }}</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required
                            value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div></div>
                            @enderror
                        <br> 
                        
                        <div class="form-group mb-2">
                            <label for="password">{{ __('Password') }}</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        </div>

                        <div class="form-group mt-4">
                            <label for="password">{{ __('Confirm Password') }}</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password" required>
                        </div>
                        {{-- <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 mt-1 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div> --}}

                    <div class="d-grip text-end mb-3">
                        <x-jet-button type="submit" class="btn btn-success btn-block"><b>{{ __('Reset Password') }}</b></x-jet-button>
                        </div>
                      </div>
                    </div>
                </div>
            </form>
</div>

@endsection

