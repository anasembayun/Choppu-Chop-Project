@extends('layouts.admin.template')
@section('title')
<h4>PACKAGE</h4>
@endsection
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Package Data</h4>
            <p class="card-description">
                Please fill in the following form :
            </p>
            <form class="forms-sample" action="{{route('admin.package.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Package Image</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label for="package_name">Package Name</label>
                <input type="text" name="package_name" class="form-control" id="package_name" placeholder="Package Name">
            </div>
            <div class="form-group">
                <label for="package_code">Product</label>
                <div class="input-group control-group increment" >
                    <select name="product_name[]" class="form-control">
                        <option value="" selected>-- Pilih Product --</option>
                        @foreach ($products as $data)
                        <option value="{{ $data->product_name }}">{{ $data->product_name }} </option>
                        @endforeach
                    </select>
                    <div class="input-group-btn"> 
                    <button class="btn btn-success" type="button"><i class="typcn typcn-plus"></i>Add</button>
                    </div>
                </div>

                <div class="clone hide">
                    <div class="control-group input-group" style="margin-top:10px">
                        <select name="product_name[]" class="form-control">
                            <option value="" selected>-- Pilih Product --</option>
                            @foreach ($products as $data)
                            <option value="{{ $data->product_name }}">{{ $data->product_name }} </option>
                            @endforeach
                        </select>
                        <div class="input-group-btn"> 
                            <button class="btn btn-danger" type="button"><i class="typcn typcn-remove"></i> Remove</button>
                        </div>
                    </div>
                </div>
                
            </div>   
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" placeholder="Description" rows="4"></textarea>
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

@section('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
        $(".btn-success").click(function(){ 
            var html = $(".clone").html();
            $(".increment").after(html);
        });
        $("body").on("click",".btn-danger",function(){ 
            $(this).parents(".control-group").remove();
        });
        });   
</script>
@endsection