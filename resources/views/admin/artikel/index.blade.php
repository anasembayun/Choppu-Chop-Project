@extends('layouts.admin.template')
@section('title')
<h4>DAFTAR ARTIKEL</h4>
@endsection
@section('content')
<div class="row">
    <div class="col-sm-6">
    <h2 class="mb-0 font-weight-bold">DAFTAR ARTIKEL</h2>
    </div>
    <div class="col-sm-6">
    <div class="d-flex align-items-center justify-content-md-end">
        <div class="pr-1 mb-3 mr-2 mb-xl-0">
        <a href="{{route('add_artikel')}}" class="btn btn-sm btn-info btn-icon-text border" style="background-color: #4A75A4;"><i class="typcn typcn-plus mr-2"></i>Tambah Data</a>
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
    <div class="card">
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr style="background-color: #C5C5C5;">
                        <th>Gambar</th>
                        <th>Judul Artikel</th>
                        <th>Author</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artikels as $data)
                    <tr>
                        <td><img src="{{asset('thumb/'.$data->image) }}"></td>
                        <td>{{$data->title}}</td>
                        <td>{{$data->author}}</td>
                        <td>{{$data->categories->category}}</td>
                        <td>
                            <a href="edit-wisata/{{$data->id}}"><button type="button" class="btn btn-sm" style="background-color: #BF7A00; color: #fff;">
                            <i class="typcn typcn-edit"></i>
                            </button></a>
                            <a href="hapus-wisata/{{$data->id}}"><button type="button" class="btn btn-sm" style="background-color: #CE5A35; color: #fff;" onClick="return confirm('Yakin mau dihapus?')">
                            <i class="typcn typcn-trash"></i>
                            </button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection

