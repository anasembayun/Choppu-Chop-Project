@extends('layouts.admin.template')
@section('partnership_name')
<h4>PARTNERSHIP</h4>
@endsection
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-partnership_name">Edit Partnership Data</h4>
            <p class="card-description">
                Please fill in the following form :
            </p>
            <form class="forms-sample" action="{{route('admin.partnership.update7yh   ', $partnership->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="file-upload-default" value="{{$partnership->image}}">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image" value="{{$partnership->image}}">
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                </div>
                <img src="/thumb/{{ $partnership->image }}" width="100px">
            </div>
            <div class="form-group">
                <label for="partnership_name">Name</label>
                <input type="text" name="partnership_name" class="form-control" id="partnership_name" placeholder="Partnership Name" value="{{$partnership->partnership_name}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" placeholder="Description" rows="4">{{$partnership->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" name="link" class="form-control" id="link" placeholder="Link" value="{{$partnership->link}}">
            </div>
            
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
        </div>
    </div>
@endsection