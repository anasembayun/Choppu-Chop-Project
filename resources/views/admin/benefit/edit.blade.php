@extends('layouts.admin.template')
@section('title')
<h4>BENEFIT</h4>
@endsection
@section('content')
<form class="forms-sample" action="{{route('admin.benefit.update',$benefit->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row">
    <div class="col-6 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Benefit Data</h4>
            <p class="card-description">
                Please fill in the following form :
            </p>
            <div class="form-group">
                <label>Image Right</label>
                <input type="file" name="img_right" class="file-upload-default" value="{{$benefit->img_right}}">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image" value="{{$benefit->img_right}}">
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                </div>
                <img src="/thumb/{{ $benefit->img_right }}" width="100px">
            </div>
            <div class="form-group">
                <label for="title_left">Title Left</label>
                <input type="text" name="title_left" class="form-control" id="title_left" placeholder="Title Left" value="{{$benefit->title_left}}">
            </div>
            <div class="form-group">
                <label for="description_left">Description Left</label>
                <textarea name="description_left" class="form-control" id="description_left" placeholder="Description Left" rows="4">{{$benefit->description_left}}</textarea>
            </div>
            <div class="form-group">
                <label for="benefit_left">Benefit Left</label>
                <input type="text" name="benefit_left" class="form-control" id="benefit_left" placeholder="Benefit Left" value="{{$benefit->benefit_left}}">
            </div>
            
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
        </div>
        </div>
    </div>

    <div class="col-6 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label>Image Left</label>
                <input type="file" name="img_left" class="file-upload-default" value="{{$benefit->img_left}}">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image" value="{{$benefit->img_left}}">
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                </div>
                <img src="/thumb/{{ $benefit->img_left }}" width="100px">
            </div>
            <div class="form-group">
                <label for="title">Title Right</label>
                <input type="text" name="title_right" class="form-control" id="title" placeholder="Title Right" value="{{$benefit->title_right}}">
            </div>
            <div class="form-group">
                <label for="description">Description Right</label>
                <textarea name="description_right" class="form-control" id="description" placeholder="Description Right" rows="4">{{$benefit->description_right}}</textarea>
            </div>
            <div class="form-group">
                <label for="benefit_right">Benefit Right</label>
                <input type="text" name="benefit_right" class="form-control" id="benefit_right" placeholder="Benefit Right" value="{{$benefit->benefit_right}}">
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" name="link" class="form-control" id="link" placeholder="Link" value="{{$benefit->link}}">
            </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection