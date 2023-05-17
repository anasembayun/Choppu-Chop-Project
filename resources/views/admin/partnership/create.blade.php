@extends('layouts.admin.template')
@section('partnership_name')
<h4>PARTNERSHIP</h4>
@endsection
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-partnership_name">Add Partnership Data</h4>
            <p class="card-description">
                Please fill in the following form :
            </p>
            <form class="forms-sample" action="{{route('admin.partnership.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="partnership_name">Name</label>
                <input type="text" name="partnership_name" class="form-control" id="partnership_name" placeholder="Partnership Name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" placeholder="Description" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" name="link" class="form-control" id="link" placeholder="Link">
            </div>
            
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
        </div>
    </div>
@endsection