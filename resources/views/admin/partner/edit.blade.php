@extends('layouts.admin.template')
@section('title')
<h4>PARTNER</h4>
@endsection
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Partner Data</h4>
            <p class="card-description">
                Please fill in the following form :
            </p>
            <form class="forms-sample" action="{{route('admin.partner.update', $partner->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" name="full_name" class="form-control" id="exampleInputName1" placeholder="Name" value="{{$partner->full_name}}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="exampleInputName1" placeholder="Address" value="{{$partner->address}}">
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" name="phone_number" class="form-control" id="exampleInputName1" placeholder="Phone Number" value="{{$partner->phone_number}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email" value="{{$partner->email}}">
            </div>
            
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
        </div>
    </div>
@endsection