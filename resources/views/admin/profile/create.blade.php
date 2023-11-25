@extends('layouts.admin.template')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('title')
<h4>KELOLA UI</h4>
@endsection
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Profile</h4>
            <p class="card-subdesc">
                Silakan isi formulir berikut :
            </p>
            <form class="forms-sample" action="{{route('store_profile')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Gambar Wisata</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="title" placeholder="Contoh: Sendhang Beji">
            </div>
            <div class="form-group">
                <label for="subtitle">Subjudul</label>
                <input type="text" name="subtitle" value="{{ old('subtitle') }}" class="form-control" id="subtitle" placeholder="Contoh: Kulwo, Bejiharjo">
            </div>
            <div class="form-group">
                <label for="link_gmaps">Link Google Maps iframe</label>
                <input type="text" name="link_gmaps" value="{{ old('link_gmaps') }}" class="form-control" id="link_gmaps" placeholder="Contoh: <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13965.362040481936!2d110.64362328392502!3d-7.928898547237787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a4b486a84e2e9%3A0xab19e7b53f5ab59e!2sBalai%20Desa%20Bejiharjo!5e0!3m2!1sid!2sid!4v1691383145638!5m2!1sid!2sid' width='600' height='450' style='border:0;'allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>">
            </div>
            <div class="form-group">
                <label for="desc">Deskripsi</label>
                <textarea name="desc" value="{{ old('desc') }}" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="subdesc">Sub Deskripsi</label>
                <textarea name="subdesc" value="{{ old('subdesc') }}" class="form-control" id="summernote3"></textarea>
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
        $('#summernote2').summernote({
            height: 500,
        });
    });

    $(document).ready(function() {
        $('#summernote3').summernote({
            height: 500,
        });
    });
</script>
@endsection