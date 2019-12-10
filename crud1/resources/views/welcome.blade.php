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
        </div>
    </div>
@endsection