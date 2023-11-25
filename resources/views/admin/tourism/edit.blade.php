@extends('layouts.admin.template')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('title')
<h4>KELOLA WISATA</h4>
@endsection
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Data Wisata</h4>
            <p class="card-description">
                Silakan isi formulir berikut :
            </p>
            <form class="forms-sample" action="{{route('update_tourism',$tourism->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Gambar Wisata</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image" value="{{ $tourism->image }}">
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="tourism_name">Nama Wisata</label>
                <input type="text" name="tourism_name" value="{{ $tourism->tourism_name }}" class="form-control" id="tourism_name" placeholder="Contoh: Sendhang Beji">
            </div>
            <div class="form-group">
                <label for="location">Lokasi Wisata</label>
                <input type="text" name="location" value="{{ $tourism->location }}" class="form-control" id="location" placeholder="Contoh: Kulwo, Bejiharjo">
            </div>
            <div class="form-group">
                <label for="link_gmaps">Link Google Maps</label>
                <input type="text" name="link_gmaps" value="{{ $tourism->link_gmaps}}" class="form-control" id="link_gmaps" placeholder="Contoh: https://maps.app.goo.gl/gq4Q5GQEthZyqwft6">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi Wisata</label>
                <textarea name="description" value="{{ old('description') }}" class="form-control" id="summernote1">{{$tourism->description }}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
        </div>
    </div>
@endsection
@section('script')
{{-- Summernote JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote1').summernote({
            height: 500,
        });
    });
</script>
@endsection