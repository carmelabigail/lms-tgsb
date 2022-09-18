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
<link href="/css/admindashboard.css" rel="stylesheet">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h3 style="color:green;"><b>Admin Dashboard</b></h3> {{-- {{ auth()-> user()->name }} --}}
</div>

  @if(session()->has('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
    @endif

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

    @if(session()->has('rejected'))
    <div class="alert alert-danger">
        {{ session()->get('rejected') }}
    </div>
    @endif

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h3 style="color:#1EBE73;"><b>All Leave Records</b></h3>
</div>

{{-- Leave table --}}
<div class="table-responsive justify-content-between flex-wrap ">
  {{-- <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a> --}}
  <table class="table table-striped table-sm">
    <thead>
      <tr> {{-- <th scope="col">No</th> --}}
        <th scope="col">No</th>
        <th scope="col">Application Date</th>
        <th scope="col">Applied By</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($leave as $item)
          <tr> {{-- <td>{{ $item->id }}</td> --}}
          <td class="count"></td>
          <td>{{ $item->date_start }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->status }}</td>
        <td>
          <a href="{{ url('approve/' .$item->id) }}" class="badge bg-info"><i class="bi bi-eye"></i></span></a>
          <a href="delete/{{ $item->id }}" class="badge bg-danger"><i class="bi bi-trash3-fill"></i></span></a>
        </td>  
      </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection