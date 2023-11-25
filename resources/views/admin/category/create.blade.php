@extends('layouts.admin.template')


@section('category')
<h4>TAMBAH KATEGORI</h4>
@endsection

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-category">Tambah Data Kategory</h4>
            <p class="card-description">
                Silakan isi formulir berikut :
            </p>
            <form class="forms-sample" action="{{route('store_category')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" value="{{ old('category') }}" class="form-control" id="category" placeholder="Contoh: Berita">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
        </div>
    </div>
@endsection