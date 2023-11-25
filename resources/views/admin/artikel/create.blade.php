@extends('layouts.admin.template')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('title')
<h4>TAMBAH BERITA</h4>
@endsection

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Berita</h4>
            <p class="card-description">
                Silakan isi formulir berikut :
            </p>
            <form class="forms-sample" action="{{route('store_artikel')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="partner_name">Kategori</label>
                <select name="category_id" class="form-control">
                    <option value="" selected>--- Pilih Kategori ---</option>
                    @foreach ($categories as $data)
                    <option value="{{ $data->id }}">{{ $data->category }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="title" placeholder="Contoh: Penandatanganan Perjanjian Kerjasama Pengelolaan Sendhang Beji">
            </div>
            <div class="form-group">
                <label for="author">Penulis</label>
                <input type="text" name="author" value="{{ old('author') }}" class="form-control" id="author" placeholder="Contoh: Nirmala Wijaya">
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="">Masukan Artikel</label>
                <textarea name="desc" id="summernote" class="form-control"></textarea>
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
        $('#summernote').summernote({
            height: 500,
        });
    });
</script>
@endsection