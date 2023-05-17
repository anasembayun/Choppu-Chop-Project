@extends('layouts.admin.template')
@section('title')
<h4>TRANSACTION</h4>
@endsection
@section('content')
<div class="row">
    <div class="col-sm-6">
    <h2 class="mb-0 font-weight-bold">TRANSACTION</h2>
    </div>
    <div class="col-sm-6">
    <div class="d-flex align-items-center justify-content-md-end">
        <div class="pr-1 mb-3 mr-2 mb-xl-0">
        <a href="{{ route('admin.transaction.create') }}" class="btn btn-sm btn-info btn-icon-text border" style="background-color: #4A75A4;"><i class="typcn typcn-plus mr-2"></i>Add Data</a>
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
                <th>No Transaction</th>
                <th>Date</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>QTY</th>
                <th>Customer Name</th>
                <th>Discount</th>
                <th>Total Price</th>
                <th>Payment Status</th>
                <th>Payment Via</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $data)
                <tr>
                <td>{{$data->transaction_number}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->products->product_name}}</td>
                <td>{{$data->products->price}}</td>
                <td>{{$data->qty}}</td>
                <td>{{$data->customers->name}}</td>
                <td>{{$data->discount}}</td>
                <td>{{$data->total_price}}</td>
                <td>{{$data->payment_status}}</td>
                <td>{{$data->payment_via}}</td>
                <td>{{$data->status}}</td>
                <td>
                    <a href="transaction/edit/{{$data->id}}"><button type="button" class="btn btn-sm" style="background-color: #BF7A00; color: #fff;">
                    <i class="typcn typcn-edit"></i>
                    </button></a>
                    <a href="transaction/delete/{{$data->id}}"><button type="button" class="btn btn-sm" style="background-color: #CE5A35; color: #fff;" onClick="return confirm('Yakin mau dihapus?')">
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