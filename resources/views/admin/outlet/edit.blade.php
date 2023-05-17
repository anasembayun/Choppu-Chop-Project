@extends('layouts.admin.template')
@section('title')
<h4>OUTLET</h4>
@endsection
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Outlet Data</h4>
            <p class="card-description">
                Please fill in the following form :
            </p>
            <form class="forms-sample" action="{{route('admin.outlet.update', $outlet->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Outlet Name</label>
                <input type="text" name="outlet_name" class="form-control" id="exampleInputName1" placeholder="Outlet Name" value="{{$outlet->outlet_name}}">
            </div>
            <div class="form-group">
                <label for="partner_name">Partner Name</label>
                <select name="partner_id" class="form-control">
                    <option value="{{$outlet->partner_id}}" selected>{{$outlet->partners->full_name}}</option>
                    @foreach ($partner as $data)
                    <option value="{{ $data->id }}">{{ $data->full_name }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="province">Province</label>
                <input type="text" name="province" class="form-control" id="exampleInputName1" placeholder="Province" value="{{$outlet->province}}">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control" id="city" placeholder="City" value="{{$outlet->city}}">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" class="form-control" id="location" placeholder="Location" value="{{$outlet->location}}">
            </div>
            <div class="form-group">
                <label for="gmaps_link">Gmaps Link</label>
                <input type="text" name="gmaps_link" class="form-control" id="gmaps_link" placeholder="Gmaps Link" value="{{$outlet->gmaps_link}}">
            </div>
            
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
        </div>
    </div>
@endsection