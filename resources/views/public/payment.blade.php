@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="payment-area">
            <h4 class="my-4 bg-primary p-3 text-white">Make your payment</h4>

            <div class="cart-summary my-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Order summary</h4>
                    </div>
                    <div class="card-body">
                        <p>Total products = {{Cart::content()->count()}}</p>
                        <p><strong>Total cost = Rp. {{Cart::total()}}</strong></p>
                    </div>
                </div>
            </div>

            <div class="bg-light p-3 my-4">
                <a href="{{route('uploads')}}" class="btn btn-dark btn-sm">Transfer Bank</a>
                <form action="{{route('cart.checkout')}}" method="post">
                    @csrf
                    <input type="hidden" name="cart_total" value="{{Cart::total()}}">
                    <input type="submit" value="Cash on Delivery" class="btn btn-success btn-sm">
                </form>
            <a href="https://flip.id/me/muhammadfaia3011" class="btn btn-warning btn-sm"> gunakan flip</a>
                <form action="{{route('cart.checkout')}}" method="post">
                    @csrf
                    <input type="hidden" name="cart_total" value="{{Cart::total()}}">
                    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="pk_test_7xVvmxzKaoeFzuBZZ18WdwKy00bmfx80CA"
                            data-amount=""
                            data-name="QuantumBook"
                            data-description="QuantumBook Payment"
                            data-locale="auto">
                    </script>
                    

                    <script> $(document).ready(function(){
                        $('#layanan').on('change', function(){
                  // ambil data dari elemen option yang dipilih
                  const price = $('#layanan option:selected').data('value');
        
                  const total = price + {{Cart::total()}};
                  // tampilkan data ke element
                  $('[name=price]').val(price);
                  $('#total').text(`Rp. ${total}`);
                });
                    });</script><span id="total">tes</span>
                </form>
            </div>
        </div>
    </div>
@endsection
