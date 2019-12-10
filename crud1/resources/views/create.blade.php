@extends('layout.index')
@section('content')
    <div class="container">
        <div class="jumbotron mt-2">
            <h3 class="text-center">Add User</h3>
            @if($errors->any)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $error}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endforeach
            @endif
            <form method="POST" action="{{Route('store')}}">
                @csrf
                <div class="form-group">
                    <label for="frist_name">Enter Your First Name</label>
                    <input type="text" class="form-control" id="frist_name" name="frist_name" value="{{old('frist_name')}}" placeholder="Enter Your First Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Enter Your Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{old('last_name')}}" placeholder="Enter Your Last Name">
                </div>
                <div class="form-group">
                    <label for="email">Enter Your Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter Your Email Address">
                </div>
                <div class="form-group">
                    <label for="phone">Enter Your Phone Number</label>
                    <input type="number" class="form-control" id="phone" name="phone" value="{{old('phone')}}" placeholder="Enter Your Phone Number">
                </div>               

                <button type="submit" class="btn btn-primary center">Submit</button>
            </form>
        </div>
    </div>
@endsection