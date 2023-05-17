@extends('layouts.admin.template')
@section('title')
<h4>PACKAGE</h4>
@endsection
@section('content')
<div class="row">
    <div class="col-sm-6">
    <h2 class="mb-0 font-weight-bold">PACKAGE</h2>
    </div>
    <div class="col-sm-6">
    <div class="d-flex align-items-center justify-content-md-end">
        <div class="pr-1 mb-3 mr-2 mb-xl-0">
        <a href="{{ route('admin.package.create') }}" class="btn btn-sm btn-info btn-icon-text border" style="background-color: #4A75A4;"><i class="typcn typcn-plus mr-2"></i>Add Data</a>
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
                <th>Image</th>
                <th>Package Name</th>
                <th>Product</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($packages as $package)
                <tr>
                <td><img src="{{asset('thumb/'.$package->image) }}" style="border-radius:0%"></td>
                <td>{{$package->package_name}}</td>
                <td><?php foreach (json_decode($package->product_name)as $data) { ?>
                    <ul class="list-ticked">
                        <li>{{$data}}</li>
                    </ul>
                    <?php } ?>
                </td>
                <td>{{$package->description}}</td>
                <td>{{$package->price}}</td>
                <td>
                    <a href="package/edit/{{$package->id}}"><button type="button" class="btn btn-sm" style="background-color: #BF7A00; color: #fff;">
                    <i class="typcn typcn-edit"></i>
                    </button></a>
                    <a href="package/delete/{{$package->id}}"><button type="button" class="btn btn-sm" style="background-color: #CE5A35; color: #fff;" onClick="return confirm('Yakin mau dihapus?')">
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