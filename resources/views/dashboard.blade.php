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

@extends('layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2"><b>Welcome back, {{ auth()-> user()->name }}</b></h1> 
</div>

{{-- Chart --}}
<div class="row">

  <div class="col bg-success rounded m-1 " >
    <div class="container p-1 my-1">
    <h1 class="text-white"><b>3</b></h1><br>
    <h1 class="text-white"><b><i class="bi-check-lg"></i> Approved Leave</b></h1>
  </div></div><br>

  <div class="col bg-warning rounded m-1 ">
  <div class="container p-1 my-1">
  <h1 class="text-white"><b>6</b></h1><br>
  <h1 class="text-white"><b><i class="bi-stopwatch-fill"></i> Pending Leave</b></h1>
  </div></div><br>

  <div class="col bg-primary rounded m-1">
  <div class="container p-1 my-1">
  <h1 class="text-white"><b>12</b></h1><br>
   <h1 class="text-white"><b><i class="bi-calendar-day-fill"></i> Balance Leave</b></h1>
  </div></div><br>

  <div class="col bg-danger rounded m-1 ">
  <div class="container p-1 my-1">
  <h1 class="text-white"><b>1</b></h1><br>
  <h1 class="text-white"><b><i class="bi-x-circle-fill"></i> Rejected Leave</b></h1>
  </div></div><br>
  </div><br>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2"><b>Leave Record</b></h1>
</div>

{{-- Leave table --}}
<div class="table-responsive justify-content-between flex-wrap ">
  {{-- <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a> --}}
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Application Date</th>
        <th scope="col">Name</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($leave as $item)
      <tr> {{-- <td>{{ $item->id }}</td> --}}
      <td class="count"></td>
      <td>{{ $item->date_start }}</td>
      <td>{{ $item->name }}</td>
      <td>{{ $item->status }}</td>
         <td>
          <a href="" class="badge bg-info"><i class="bi bi-eye"></i></a>
          <a href="" class="badge bg-danger"><i class="bi bi-trash3-fill"></i>
        </td>  
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection