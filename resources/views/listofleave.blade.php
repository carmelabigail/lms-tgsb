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

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h3 style="color:#FFB703;"><b>Pending Leave</b></h3>
</div>

{{-- Leave table --}}
<div class="table-responsive justify-content-between flex-wrap ">
  {{-- <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a> --}}
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Application Date</th>
        <th scope="col">Applied By</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ '1' }}</td>
        <td>{{ '2022-08-10' }}</td>
        <td>{{ 'Arrvierri Vespha' }}</td>
        <td>{{ 'Pending' }}</td>
         <td>
          <a href="" class="badge bg-info"><i class="bi bi-eye"></i></span></a>
          <a href="" class="badge bg-danger"><i class="bi bi-trash3-fill"></i></span></a>
        </td>  
      </tr>
    </tbody>
  </table>
</div>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3 style="color:green;"><b>Approved Leave</b></h3>
  </div>

  {{-- Leave table --}}
<div class="table-responsive justify-content-between flex-wrap ">
    {{-- <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a> --}}
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Application Date</th>
          <th scope="col">Applied By</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ '2' }}</td>
          <td>{{ '2022-08-10' }}</td>
          <td>{{ 'Arrvierri Vespha' }}</td></td>
          <td>{{ 'Approved' }}</td>
           <td>
            <a href="" class="badge bg-info"><i class="bi bi-eye"></i></span></a>
            <a href="" class="badge bg-danger"><i class="bi bi-trash3-fill"></i></span></a>
          </td>  
        </tr>
      </tbody>
    </table>
  </div>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3 style="color:red;"><b>Rejected Leave</b></h3>
  </div>

  {{-- Leave table --}}
<div class="table-responsive justify-content-between flex-wrap ">
    {{-- <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a> --}}
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Application Date</th>
          <th scope="col">Applied By</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead><tbody>
        <tr>
        </tr>
      </tbody>
    </table>
  </div>
@endsection