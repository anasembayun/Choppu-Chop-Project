@extends('layouts.admin.template')
@section('title')
<h4>KELOLA WISATA</h4>
@endsection
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Data Galeri Wisata</h4>
            <p class="card-description">
                Silakan isi formulir berikut :
            </p>
            <form class="forms-sample" action="{{route('update_gallery',$gallery->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Gambar Wisata</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image" value="{{$gallery->image}}">
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="partner_name">Nama Wisata</label>
                <select name="tourism_id" class="form-control">
                    <option value="{{$gallery->tourism_id}}" selected>{{$gallery->tourisms->tourism_name}}</option>
                    <option value="" >--- Pilih Wisata ---</option>
                    @foreach ($tourisms as $data)
                    <option value="{{ $data->id }}">{{ $data->tourism_name }} </option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
        </div>
    </div>
@endsection