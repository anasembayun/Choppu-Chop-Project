@extends('layouts.admin.template')
@section('title')
<h4>BANNER</h4>
@endsection
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Banner Data</h4>
            <p class="card-description">
                Please fill in the following form :
            </p>
            <form class="forms-sample" action="{{route('admin.banner.update',$banner->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Banner Image</label>
                <input type="file" name="image" class="file-upload-default" value="{{$banner->image}}">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image" value="{{$banner->image}}">
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                </div>
                <img src="/thumb/{{ $banner->image }}" width="100px">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$banner->title}}">
            </div>
            <div class="form-group">
                <label for="subtitle">Subtitle</label>
                <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Subtitle" value="{{$banner->subtitle}}">
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" name="link" class="form-control" id="link" placeholder="Link" value="{{$banner->link}}">
            </div>
            
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
        </div>
    </div>
@endsection