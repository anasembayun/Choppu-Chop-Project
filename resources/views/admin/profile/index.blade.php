@extends('layouts.admin.template')
@section('title')
<h4>KELOLA UI</h4>
@endsection
@section('content')
<div class="row">
    <div class="col-sm-6">
    <h2 class="mb-0 font-weight-bold">PROFIL DESA WISATA BEJIHARJO</h2>
    </div>
    <div class="col-sm-6">
    <div class="d-flex align-items-center justify-content-md-end">
        <div class="pr-1 mb-3 mr-2 mb-xl-0">
            @if($profile == 0)
            <a href="{{ route('add_profile') }}" class="btn btn-sm btn-info btn-icon-text border" style="background-color: #4A75A4;">
                <i class="typcn typcn-plus mr-2"></i>Tambah Data</a>
                
            @else
            <a href="" class="btn btn-sm btn-info btn-icon-text border" style="background-color: #BF7A00; color: #fff;">
                <i class="typcn typcn-edit"></i>Edit Data</a>
            @endif
        </div>
        <div class="pr-1 mb-3 mb-xl-0">
        <div class="input-group">
            <input type="text" style="width:10rem ;height: 2.2rem;border-color: #C5C5C5;" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
            <div class="input-group-append" style="height: 2.2rem;">
            <span class="input-group-text" style="background-color: #C5C5C5; border-color: #C5C5C5;" id="search">
                <i class="typcn typcn-zoom"></i>
            </span>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
    @foreach($profiles as $profile)
        <div class="card">
            <div class="card-body">
                <div class="form-group" style="text-align: center">
                    <img src="{{asset('thumb/'.$profile->image) }}" width="20%" >
                </div>
                <div class="form-group">
                    <p><b>Judul</b> : <br>{{$profile->title}}<p>
                </div>
                <div class="form-group">
                    <p><b>Subjudul : </b><br>{{$profile->subtitle}}<p>
                </div>
                <div class="form-group">
                    <p><b>Link Maps Iframe : </b><br>{{$profile->link_gmaps}}<p>
                </div>
                <div class="form-group">
                    <p><b>Deskripsi : </b><br>{{$profile->desc}}<p>
                </div>
                <div class="form-group">
                    <p><b>Sub Deskripsi</b>{!!$profile->subdesc!!}<p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection

