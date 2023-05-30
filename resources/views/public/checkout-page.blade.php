@extends('layouts.master')

@section('content')
    <div class="container">
        <div class=" p-3 bg-primary text-white"><h4 class="m-0">Checkout Page</h4></div>
        <div class="row">
            <div class="col-lg-8">
                <div class="billing-address ">
                    <div class="p-3 bg-light "><h4 class="m-0">Billing address</h4></div>

                    <form action="{{route('cart.proceed')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="shipping_name" class="form-control {{$errors->has('shipping_name')? 'is-invalid' : ''}}" value="{{Auth::user()? Auth::user()->name : ''}}" placeholder="Name">

                            @if($errors->has('shipping_name'))
                                <span class="invalid-feedback"><strong>{{$errors->first('shipping_name')}}</strong></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="mobile_no" class="form-control {{$errors->has('mobile_no') ? 'is-invalid': ''}}" placeholder="nomor whatsapp ">
                            @if($errors->has('mobile_no'))
                                <span class="invalid-feedback">
                                    <strong>{{$errors->first('mobile_no')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="form-group form-group--inline">
                                <select name="province_id" id="province_id" class="form-control">
                                    <option value="" selected>Provinsi Tujuan</option>
                                    @foreach ($provinsi  as $row)
                                    <option value="{{$row['province_id']}}" namaprovinsi="{{$row['province']}}">{{$row['province']}}</option>
                                    @endforeach</select></div>
                        </div>
                        <input type="hidden" class="form-control" id="nama_provinsi" nama="nama_provinsi" placeholder="pilih provinsi ">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

<script>
    
$(document).ready(function(){
    //ini ketika provinsi tujuan di klik maka akan eksekusi perintah yg kita mau
    //name select nama nya "provinve_id" kalian bisa sesuaikan dengan form select kalian
    $('select[name="province_id"]').on('change', function(){
        var namaprovinsiku = $("#province_id option:selected").attr("namaprovinsi");// menampilkan hasil nama provinsi ke input id nama_provinsi
        $("#nama_provinsi").val(namaprovinsiku);
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
    success:function(data){
        $('select[name="kota_id"]').empty();
        $.each(JSON.parse(data), function(key, value){
            $('select[name="kota_id"]').append('<option value="'+ value.city_id +'" namakota="'+ value.type +' ' +value.city_name+ '">' + value.type + ' ' + value.city_name + '</option>');});}});}else {$('select[name="kota_id"]').empty();}});});</script>
                        <div class="form-group">
                            <div class="form-group form-group--inline">
                                <select name="kota_id" class="form-control">
                                    <option value="">Pilih kota</option></select></div>
                        </div>
    
                        <div class="form-group ">
                            <select name="kurir" id="kurir" class="form-control">
                                <option value="" selected >Pilih kurir</option><option value="jne">JNE</option>
                                <option value="tiki">TIKI</option><option value="pos">POS INDONESIA</option>
                                </select></div>
    
<script>
    
    $(document).ready(function(){
        //ini ketika provinsi tujuan di klik maka akan eksekusi perintah yg kita mau
        //name select nama nya "provinve_id" kalian bisa sesuaikan dengan form select kalian
        $('select[name="kurir"]').on('change', function(){
        // kita buat variable provincedid untk menampung data id select province
        let curir = $(this).val();//kita cek jika id di dpatkan maka apa yg akan kita eksekusi
        let kotaid = $("select[name=kota_id]").val();
        if(curir){// jika di temukan id nya kita buat eksekusi ajax GET
            jQuery.ajax({// url yg di root yang kita buat tadi
            url:"/origin=255&destination="+kotaid+"&weight=100&courier="+curir,
        // aksion GET, karena kita mau mengambil data
        type:'GET',
        // type data jsondata
        Type:'json',
        // jika data berhasil di dapat
        success:function(data){
            $('select[name="layanan"]').empty();
            $.each(JSON.parse(data), function(key, value){
                $.each(value.costs, function(key, ong){
                    $.each(ong.cost, function(key, ongkir){
                $('select[name="layanan"]').append('<option data-value="'+ongkir.value+'">' + value.code +' ' +ong.service+'('+ong.description+') - Rp.'+ongkir.value+ '(perkiraan '+ongkir.etd+' hari)</option>'); 
            });
                  });  
            }
                );}});}else {$('select[name="layanan"]').empty();
            }});
        });
                </script>                            
                                <div class="form-group">
                                    <select name="layanan" id="layanan" class="form-control">
                                        <option value="">Pilih layanan</option></select>
                                        </div>

                                        <script> $(document).ready(function(){
                                            $('#layanan').on('change', function(){
                                      // ambil data dari elemen option yang dipilih
                                      const price = $('#layanan option:selected').data('value');
                            
                                      const total = price + {{Cart::total()}};
                                      // tampilkan data ke element
                                      $('[name=price]').val(price);
                                      $('#total').text(`Rp. ${total}`);
                                    });
                                        });</script>
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
                            <label for="price">shipping cost = Rp.</label>
                            <input type="text" name="price" readonly />
                            <h4>Total: <span id="total">-</span></h4>
                            
                            
                        </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
