@extends('layouts.mainly')

@section('container')
<link href="/css/login.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
            <div class="contact-image">
              <img src="img/terazlogo.png" alt="Teraz Global" style="width:116px;height:90px;">
            </div>
            <form action="{{ route('password.email') }}" method="POST">
                {{ csrf_field() }}
              {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
            <h2>Forgot Password</h2>
            <div class="row">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
                        <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required
                        value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                            </div></div>
                            @enderror
                        <br> 
                        {{-- <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 mt-1 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div> --}}
                        <div class="d-grip text-end mt-1">
                            <x-jet-button type="submit" class="btn btn-success btn-block"><b>{{ __('Email Password Reset Link') }}</b></x-jet-button>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
    </div>

@endsection
