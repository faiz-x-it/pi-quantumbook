@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="my-4 p-3 bg-primary text-white"><h4 class="m-0">Checkout Page</h4></div>
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-product">
                    <h4><a href="{{route('cart')}}" title="Back to cart" class="text-danger"><i class="fas fa-shopping-basket" ></i></a> Your orders</h4>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Book</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Sub Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(Cart::content() as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->qty}}</td>
                            <td>Rp. {{$item->price}}</td>
                            <td>Rp. {{$item->subtotal()}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="billing-address my-4">
                    <div class="p-3 bg-light my-4"><h4 class="m-0">Billing address</h4></div>

                    <form action="{{route('cart.proceed')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="shipping_name" class="form-control {{$errors->has('shipping_name')? 'is-invalid' : ''}}" value="{{Auth::user()? Auth::user()->name : ''}}" placeholder="Name">

                            @if($errors->has('shipping_name'))
                                <span class="invalid-feedback"><strong>{{$errors->first('shipping_name')}}</strong></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="mobile_no" class="form-control {{$errors->has('mobile_no') ? 'is-invalid': ''}}" placeholder="Mobile number">
                            @if($errors->has('mobile_no'))
                                <span class="invalid-feedback">
                                    <strong>{{$errors->first('mobile_no')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="form-group form-group--inline"><label for="provinsi">Provinsi Tujuan</label><select name="province_id" id="province_id" class="form-control"><option value="">Provinsi Tujuan</option>@foreach ($provinsi  as $row)<option value="{{$row['province_id']}}" namaprovinsi="{{$row['province']}}">{{$row['province']}}</option>@endforeach</select></div>
                        </div>
                        <div class="form-group">
                            <div class="form-group form-group--inline"><label for="provinsi">kota Tujuan</label><select name="kota_id" id="kota_id" class="form-control"><option value="">kota Tujuan</option>
                                @foreach ($kota  as $k)
                                <option value="{{$k['city_id']}}" namaprovinsi="{{$k['city']}}">{{$k['city']}}
                                </option>@endforeach</select></div>
                        </div>
                        <div class="form-group">
                            <textarea name="address" class="form-control {{$errors->has('address')? 'is-invalid' : ''}}" placeholder="Shipping Address" cols="30" rows="5"></textarea>
                            @if($errors->has('address'))
                                <span class="invalid-feedback">
                                    <strong>{{$errors->first('address')}}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="payment-area my-4 py-5 px-3 bg-light">
                            <input type="submit" value="Proceed to payment" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart-summary my-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>Order summary</h4>
                        </div>
                        <div class="card-body">
                            <p>Total products = {{Cart::content()->count()}}</p>
                            <p>Product Cost = Rp. {{Cart::total()}}</p>
                            <p>Shipping cost = Rp. 0.00 </p>
                            <p><strong>Total cost = Rp. {{Cart::total()}}</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>

    <script>
        
    $(document).ready(function(){
        //ini ketika provinsi tujuan di klik maka akan eksekusi perintah yg kita mau
        //name select nama nya "provinve_id" kalian bisa sesuaikan dengan form select kalian
        $('select[name="province_id"]').on('change', function(){
        // kita buat variable provincedid untk menampung data id select province
        let provinceid = $(this).val();//kita cek jika id di dpatkan maka apa yg akan kita eksekusi
        if(provinceid){// jika di temukan id nya kita buat eksekusi ajax GET
            jQuery.ajax({// url yg di root yang kita buat tadi
            url:"/kota/"+provinceid,
        // aksion GET, karena kita mau mengambil data
        type:'GET',
        // type data jsondata
        Type:'json',
        // jika data berhasil di dapat
        success:function(data){console.log(data);}
    
    });}});});
        </script>
@endsection
