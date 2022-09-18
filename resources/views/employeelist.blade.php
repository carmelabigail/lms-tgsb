{{-- <x-app-layout>
    <x-slot name="header">
    <h1 class="font-semibold text-xl text-gray-800 leading-tight"><b>Welcome back, {{ auth()-> user()->name }}</b></h1>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>  --}}

@extends('layouts.adminmain')

@section('container')
<link href="/css/employeelist.css" rel="stylesheet">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h2 style="color:green;"><b>Employee List</b></h2>
  <a href="/newuser"><button type="submit" class="btn btn-success btn-block"><b>Add New Employee</b></button></a>
</div>

  @if(session()->has('success'))
  <div class="alert alert-success">
      {{ session()->get('success') }}
  </div>
  @endif
{{-- Leave table --}}
<div class="table-responsive justify-content-between flex-wrap ">
  {{-- <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a> --}}
  <table class="table table-striped table-sm">
    <thead>
      <tr> {{-- <th scope="col">User ID</th> --}}
        <th scope="col">No.</th>
        <th scope="col">Employee</th>
        <th scope="col">Position</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
      <td class="count"></td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->position }}</td>
         <td>
          <a href="{{ url('edit/' .$user->id) }}" class="badge bg-info"><i class="bi bi-eye"></i></span></a>
          <a href="delete/{{ $user->id }}" class="badge bg-danger"><i class="bi bi-trash3-fill"></i></span></a>
        </td>  
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection