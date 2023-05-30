@extends('layouts.user-master')

@section('content')
    <div class="container">
        <h4 class="my-4 p-3 bg-light">Profile</h4>

        <div class="row">
            <div class="col-lg-6">
                    <div class="card card-body my-3 d-flex flex-row">
                        <div class="user-avatar mr-3">
                            <img src="{{Auth::user()->image? Auth::user()->image_url:Auth::user()->default_img}}" width="100" alt="">
                        </div>

                        <div class="user-info">
                            <h5 class="my-3">{{Auth::user()->name}}</h5>
                            <p><i class="fas fa-envelope mr-2"></i> {{Auth::user()->email}}</p>
                            <a class="btn btn-danger" href="/logout">Log Out</a>
                        </div>
                    </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-body my-3">
                    <h6>Activities</h6>
                    <p><a href="{{route('user.orders')}}" class="mr-2"><i class="fas fa-shopping-basket mr-1"></i> Orders</a> {{Auth::user()->orders? Auth::user()->orders->count(): 'No order yet'}}</p>
                    <p><a href="{{route('user.reviews')}}" class="mr-2"><i class="fas fa-comments mr-1"></i> Reviews</a> {{Auth::user()->reviews? Auth::user()->reviews->count(): 'No review yet'}}</p>
                </div>
            </div>
        </div>
        <h4 class="my-4 p-4 bg-light">My orders</h4>

       @if($myOrders->count())
       <table class="table table-borderless table-striped mb-4">
       <thead>
       <tr>
         <th>Order id</th>
         <th scope="col">Payment type</th>
         <th scope="col">Total price</th>
         <th scope="col">Orders status</th>
         <th scope="col">Action</th>
       </tr>
       </thead>
        <tbody>
        @foreach($myOrders as $order)
           <tr>
               <td>{{$order->id}}</td>
               <td>{{$order->payment_type}}</td>
               <td>Rp. {{$order->total_price}}</td>
               <td>
                   @if($order->order_status == 0)
                       <span class="text-danger">Pending</span>
                   @else
                       <span class="text-success">Accepted</span>
                   @endif
               </td>
               <td><a href="{{route('order.details', $order->id)}}">Order Details</a></td>
           </tr>
        @endforeach
        </tbody>
       </table>
       @else
           <div class="alert alert-warning">You have no order.</div>
       @endif
   </div>

    </div>
    
@endsection
