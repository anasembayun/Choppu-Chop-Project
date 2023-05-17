@extends('layouts.admin.template')
@section('title')
<h4>PARTNERSHIP TERMS</h4>
@endsection
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Partnership Terms Data</h4>
            <p class="card-terms">
                Please fill in the following form :
            </p>
            <form class="forms-sample" action="{{route('admin.terms.update',$terms->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="terms">terms</label>
                <textarea name="terms" class="form-control" id="terms" placeholder="terms" rows="2">{{$terms->terms}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
        </div>
    </div>
@endsection