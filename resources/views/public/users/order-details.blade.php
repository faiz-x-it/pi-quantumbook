@extends('layouts.user-master')

@section('content')
<div class="container">
    <h4 class="my-4 p-4 bg-light">Order Details</h4>

    <div class="card my-4">
        <div class="card-header">
            <h4>Billing Address</h4>
        </div>
        <div class="card-body">
            <p><i class="fas fa-user"></i> <span class="mx-2">{{$order->shipping->shipping_name}}</span></p>
            <p><i class="fas fa-phone"></i><span class="mx-2">{{$order->shipping->mobile_no}}</span></p>
            <p><i class="fas fa-map-marked"></i> <span class="mx-2">{{$order->shipping->address}}</span></p>
            <input type="text" class="form-control" id="nama_provinsi" nama="nama_provinsi" placeholder="pilih provinsi ">
        </div>
    </div>
    <div class="order-product mb-4">
        <h4 class="my-4 p-4 bg-light">Order information</h4>
        <table class="table">
        <thead>
        <tr>
            <th scope="col">Book Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Sub Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order_details as $order_detail)
        <tr>
          <td>{{$order_detail->book_name}}</td>
          <td>{{$order_detail->book_quantity}}</td>
          <td>Rp. {{$order_detail->price}}</td>
          <td>Rp. {{$order_detail->price * $order_detail->book_quantity}}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td><strong>Rp. {{$order->total_price}}</strong></td>
        </tr>
        </tbody>
        </table>
    </div>
</div>
@endsection
