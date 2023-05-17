@extends('layouts.admin.template')
@section('title')
<h4>Product Material</h4>
@endsection
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Product Material Data</h4>
            <p class="card-description">
                Please fill in the following form :
            </p>
            <form class="forms-sample" action="{{route('admin.material.update', $material->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="material_name">Material Name</label>
                <input type="text" name="material_name" class="form-control" id="material_name" placeholder="Material Name" value="{{$material->material_name}}">
            </div>
            <div class="form-group">
                <label for="material_code">Material Code</label>
                <input type="text" name="material_code" class="form-control" id="material_code" placeholder="Material Code" value="{{$material->material_code}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" placeholder="Description" rows="4">{{$material->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="Price" value="{{$material->price}}">
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="text" name="stock" class="form-control" id="stock" placeholder="Stock" value="{{$material->stock}}">
            </div>
            
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
        </div>
    </div>
@endsection