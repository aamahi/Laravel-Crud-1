@extends('layout.index')
@section('content')
    <div class="container">
        <div class="jumbotron mt-3">
            
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               {{ session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <h2 class="text-center">All User</h2>
            <table class="table table-hover table-bordered table-dark mt-4">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <th>{{$user->id}}</th>
                        <td>{{$user->frist_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>
                            <a href="#" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection