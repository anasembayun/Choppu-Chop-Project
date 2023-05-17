@extends('layouts.admin.template')
@section('title')
<h4>PRODUCT</h4>
@endsection
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Product Data</h4>
            <p class="card-description">
                Please fill in the following form :
            </p>
            <form class="forms-sample" action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Product Image</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Product Name">
            </div>
            <div class="form-group">
                <label for="product_code">Product Code</label>
                <input type="text" name="product_code" class="form-control" id="product_code" placeholder="Product Code">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" placeholder="Description" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="variant">Variant</label>
                <input type="text" name="variant" class="form-control" id="variant" placeholder="Variant">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="Price">
            </div>
            
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
        </div>
    </div>
@endsection